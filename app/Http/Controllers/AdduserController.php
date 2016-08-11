<?php namespace App\Http\Controllers;

use App\Http\Requests\AdduserRequest;
use App\Models\Apartment;
use App\Models\Crm_account;
use App\Models\Floor;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdduserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $profiles =  Apartment::find(Auth::user()->profile->defaultApartment)->profiles()->approved()->get();

        $requestBy =  Apartment::find(Auth::user()->profile->defaultApartment)->profiles()->notapproved()->get();

        return view('apartmentadmin.index', compact('profiles', 'requestBy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $floorno = Floor::lists('floor_no', 'floor_no');
        $disable        =   null;

        return view('apartmentadmin.create', compact('disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AdduserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdduserRequest $request)
    {
//        $input = $request->all();                               // get all data
//        $input['confirmed'] = 1;                                // set confirmed to 1
//        $input['password'] = Hash::make($input['password']);    // hash password
//
//        $user       =   User::create($input);                   // save above details

        $user = User::create([
            'first_name'            =>      $request->first_name,
            'last_name'             =>      $request->last_name,
            'email'                 =>      $request->email,
            'confirmed'             =>      1,
            'password'              =>      Hash::make($request->password),
        ]);


//        $profile    =   $user->profile()->save(new Profile);    // also create new profile
//        $profile->apartment_id  =   Auth::user()->profile->defaultApartment; // get current defaultApartment
//        $profile->save();                                       // save details on profile

        $profile = Profile::create([
            'user_id'                   => $user->id,
            'apartment_id'              => Auth::user()->profile->defaultApartment,
        ]);

        dd(Auth::user()->profile->defaultApartment);


        $role = Role::whereName('user')->first();
        $user->assignRole($role);                       //Assign Role

        $block_no       =   $request->blockno; // get block_no from profileform
        $floor_no       =   $request->floorno; // get floor_no from profileform

        $profile->apartments()->attach($profile->defaultApartment , ['approved' => '1', 'block_no' => $block_no, 'floor_no' => $floor_no]);
        // attach this profile with default apartment, with approved = 1, and block_no, floor_no according to profileform in apartment_profile pivot table.

        Crm_account::create([
            'account'                       => $user->first_name . $user->last_name,
            'fname'                         => $user->first_name,
            'lname'                         => $user->last_name,
            'company'                       => 'Company Name',
            'email'                         => $user->email,
            'address'                       => 'Current Address',
            'city'                          => 'Nagpur',
            'state'                         => 'Maharashtra',
            'zip'                           => '440012',
            'country'                       => 'India',
        ]);


        return redirect()->back()
            ->withMessage('User has been Added')
            ->withStatus('success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);

        $apartment = Apartment::findOrFail($users->profile->defaultApartment);

        $prof = $apartment->profiles()->where('profile_id','=', $users->profile->id)->first(); // fetches profile_id from pivot table


        return view ('apartmentadmin.show', compact('users','prof'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $floorno = Floor::lists('floor_no', 'floor_no');

        return view ('apartmentadmin.edit', compact('user', 'floorno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdduserRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdduserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $input = $request->all();
        $input['confirmed'] = 1;    // set confirmed to 1
        $input['password'] = Hash::make($input['password']);

        $user->fill($input)->save();

        $block_no       =   $request->input('blockno'); // get block_no from profileform
        $floor_no       =   $request->input('floorno'); // get floor_no from profileform


        $user->profile->apartments()->detach($user->profile->defaultApartment);

        $user->profile->apartments()->attach($user->profile->defaultApartment , ['approved' => '1', 'block_no' => $block_no, 'floor_no' => $floor_no]);
        // attach this profile with default apartment, with approved = 1, and block_no, floor_no according to profileform in apartment_profile pivot table.

        return redirect()->route('adduser.index')
            ->withMessage('User Details Updated')
            ->withStatus('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('adduser.index')
            ->withMessage('User Deleted')
            ->withStatus('success');
    }
}
