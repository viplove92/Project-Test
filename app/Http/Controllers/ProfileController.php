<?php namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Mobile;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Filesystem\Filesystem;
use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Validator, Input, Hash, Auth;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $user = Auth::user();

        return view('profiles.home', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        // save profile pic
        if(Input::file())
        {
            $user = Auth::user();
            $profile = Profile::find($user->profile->id);
            $old = $profile->avatar;
            $path = public_path().'/images/profiles/'.$old;

            if(File::exists($path)) File::delete($path);

            $string = str_random(30);
            $image = Input::file('image');
            $filename  = $string . time(). date('dmY') . '.' . $image->getClientOriginalExtension();

            $path = public_path('/images/profiles/' . $filename);

            Image::make($image->getRealPath())
                ->resize(200, null, function ($constraint)
                { $constraint->aspectRatio(); })
                ->save($path, 60);

            $profile->avatar = $filename;
            $profile->save();

            return redirect()->route('profiles.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $profiles = Profile::find($id);

        return view ('profiles.show', compact('profiles'));

    }

    /**
     * Show the form for editing the specified resource.
     * Update the default Apartment of User
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {



    }


    /**
     * Update the specified resource in storage.
     *
     * @param ProfileRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(ProfileRequest $request, $id)
    {

//        Updates first_name and last_name in User Model
        $user = Auth::user();
        $userinput = $request->only('first_name','last_name');
        $user->fill($userinput)->save();

//        Updates mobile_no and gender_id in Profile Model
        $profile = Profile::findOrFail($id);
        $profileinput = $request->only('mobile_no', 'gender_id');
        $profile->fill($profileinput)->save();

        return redirect()->back()
                ->withStatus('success','Profile has been updated');

//        dd($userinput, $profileinput);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * @return mixed
     */
    public function postUserPasswordChange()
    {
        $rules = [
            'password'              => 'required|min:6|max:20',
            'password_confirmation' => 'required|same:password'
        ];

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator);
        }

        $user = Auth::user();

        $current_password = Input::get('current_password');
        $new_password = Input::get('password');


        if (strlen($current_password) > 0 && !Hash::check($current_password, $user->password))
        {

            return redirect()->route('profiles.index')
                ->withErrors('Please specify the good current password')
                ->withStatus('danger');
        }
        else
        {
            $user = Auth::user();
            $user->password = Hash::make($new_password);

            // finally we save the authenticated user
            $user->save();

            return redirect()->route('profiles.index')
                ->withMessage('Password changed successfully!')
                ->withStatus('success');
        }
    }


}
