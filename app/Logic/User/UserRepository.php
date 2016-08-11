<?php namespace App\Logic\User;

use App\Logic\Mailers\UserMailer;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use App\Models\Password;
use Hash, Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserRepository {

    protected $userMailer;

    public function __construct( UserMailer $userMailer )
    {
        $this->userMailer = $userMailer;
    }

    public function register( $data )
    {

        $confirmation_code = sha1(mt_rand());
        $user = new User;
        $user->email                = $data['email'];
        $user->first_name           = ucfirst($data['first_name']);
        $user->last_name            = ucfirst($data['last_name']);
        $user->password             = Hash::make($data['password']);
        $user->confirmation_code    = $confirmation_code;
        $user->save();

        //Save Profile
        $user->profile()->save(new Profile);

        //Assign Role
        $role = Role::whereName('user')->first();
        $user->assignRole($role);

        //Data
        $data=[
            'first_name'                => $user->first_name,
            'confirmation_code'         => $confirmation_code,
            'subject'                   => 'Please Verify Email Address',
            'email'                     => $user->email
        ];

        //Send Verification Email
//        $this->userMailer->verify($user->email, $data);
    }

    public function resendVerify(User $user)
    {

        $user = User::whereEmail($user->email)->first();

             $data = [
                'first_name' => $user->first_name,
                'confirmation_code' => $user->confirmation_code,
                'subject' => 'Re-sent, Please Verify Email Address',
                'email' => $user->email
            ];

        $this->userMailer->verify($user->email, $data);
    }


    public function resetPassword( User $user  )
    {
        $token = sha1(mt_rand());
        $password = new Password;
        $password->email = $user->email;
        $password->token = $token;
        $password->created_at = Carbon::now();
        $password->save();

        $data = [
            'first_name'    => $user->first_name,
            'token'         => $token,
            'subject'       => 'Easymanage.in Password Reset Link',
            'email'         => $user->email
        ];

        $this->userMailer->passwordReset($user->email, $data);
    }
}