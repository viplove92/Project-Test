<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Logic\User\UserRepository;
use Illuminate\Contracts\Auth\Guard;
use App\Models\User;
use App\Models\Social;
use App\Models\Role;
use Illuminate\Support\Facades\Redirect;
use Input, Validator, Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Traits\CaptchaTrait;

class AuthController extends Controller {

    use CaptchaTrait;

    protected $auth;

    protected $userRepository;

    public function __construct( Guard $auth, UserRepository $userRepository )
    {
        $this->auth = $auth;
        $this->userRepository = $userRepository;
    }

    public function userRedirect()
    {
        if( $this->auth->user()->hasRole('user'))
        {
            return redirect()->route('user.home')
                ->with('message','User Already Logged In')
                ->with('status', 'success');
        }

        if( $this->auth->user()->hasRole('administrator'))
        {
            return redirect()->route('admin.home')
                ->with('message','User Already Logged In')
                ->with('status', 'success');
        }
    }

    public function getLogin()
    {
        if(Auth::check())
        {
            return $this->userRedirect();
        }
            return view('auth.login');
    }

    public function postLogin()
    {
        $email      = Input::get('email');
        $password   = Input::get('password');
        $remember   = Input::get('remember');

        if($this->auth->attempt([
            'email'     => $email,
            'password'  => $password,
            'confirmed' => 1
        ], $remember == 1 ? true : false))
        {
            if( $this->auth->user()->hasRole('user'))
            {
                return redirect()->route('user.home');
            }

            if( $this->auth->user()->hasRole('administrator'))
            {
                return redirect()->route('admin.home');
            }

        }
        else
        {
            return redirect()->back()
//                ->with('message','Incorrect email or password')
                ->with('message','We were unable to sign you in.')
                ->with('status', 'danger')
                ->withInput();
        }

    }

    public function getLogout()
    {
        \Auth::logout();

        return redirect()->route('public.home')
            ->with('status', 'success')
            ->with('message', 'Logged out');

    }

    public function getRegister()
    {
        if(Auth::check())
        {
            return $this->userRedirect();
        }

            return view('auth.register');
    }

    public function postRegister()
    {
        $input = Input::all();
        $validator = Validator::make($input, User::$rules, User::$messages);
        if($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if($this->captchaCheck() == false)
        {
            return redirect()->back()
                ->withErrors(['Wrong Captcha'])
                ->withInput();
        }

        $data = [
            'first_name'        => $input['first_name'],
            'last_name'         => $input['last_name'],
            'email'             => $input['email'],
            'password'          => $input['password'],
        ];

        $this->userRepository->register($data);

        return redirect()->route('public.home')
            ->with('status', 'success')
            ->with('message', 'You are registered successfully. Please login.');

    }

//    Activation Link route

    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
//            throw new InvalidConfirmationCodeException;
            return redirect()->route('auth.login')
                ->with('status', 'danger')
                ->with('message', 'Code Expired. Please request for New Verification Link or Register for New Account');
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
//            throw new InvalidConfirmationCodeException;
          return redirect()->route('auth.login')
                ->with('status', 'danger')
                ->with('message', 'Code Expired. Please request for New Verification Link or Register for New Account');
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        return redirect()->route('auth.login')
            ->with('status', 'success')
            ->with('message', 'You have successfully verified your account. Please login.');
    }

// Resend

    public function getVerify()
    {
        if(Auth::check())
        {
            return $this->userRedirect();
        }
            return view('auth.resentverify');
    }

    public function postVerify( UserRepository $userRepository)
    {
        $rules = [
            'email' => 'email|required'
        ];

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $email  = Input::get('email');
        $user   = User::where('email', '=', $email)->first();
        if(empty($user))
        {
            return redirect()->back()
                ->with('status', 'danger')
                ->with('message', 'User with this email does not exist!');
        }
        elseif($user->confirmed==1)
        {
            return redirect()->route('auth.login')
                ->with('status', 'success')
                ->with('message', 'User already Verified. Please Login.');
        }

        $userRepository->resendVerify($user);

        return redirect()->back()
            ->with('status', 'success')
            ->with('message', 'Check your inbox!');

    }


//


    public function getSocialRedirect( $provider )
    {
        $providerKey = \Config::get('services.' . $provider);
        if(empty($providerKey))
            return view('pages.status')
                ->with('error','No such provider');

        return Socialite::driver( $provider )->redirect();

    }

    public function getSocialHandle( $provider )
    {

        $user = Socialite::driver( $provider )->user();

        $socialUser = null;

        //Check is this email present
        $userCheck = User::where('email', '=', $user->email)->first();
        if(!empty($userCheck))
        {
            $socialUser = $userCheck;
        }
        else
        {
            $sameSocialId = Social::where('social_id', '=', $user->id)->where('provider', '=', $provider )->first();

            if(empty($sameSocialId))
            {
                //There is no combination of this social id and provider, so create new one
                $newSocialUser = new User;
                $newSocialUser->email              = $user->email;
                $name = explode(' ', $user->name);
                $newSocialUser->first_name         = $name[0];
                $newSocialUser->last_name          = $name[1];
                $newSocialUser->confirmed          = 1;
                $newSocialUser->save();

                $socialData = new Social;
                $socialData->social_id = $user->id;
                $socialData->provider= $provider;
                $newSocialUser->social()->save($socialData);

                // Add role
                $role = Role::whereName('user')->first();
                $newSocialUser->assignRole($role);

                $socialUser = $newSocialUser;
            }
            else
            {
                //Load this existing social user
                $socialUser = $sameSocialId->user;
            }

        }

        $this->auth->login($socialUser, true);

        if( $this->auth->user()->hasRole('user'))
        {
            return redirect()->route('user.home');
        }

        if( $this->auth->user()->hasRole('administrator'))
        {
            return redirect()->route('admin.home');
        }

        return \App::abort(500);
    }




}