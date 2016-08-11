<?php namespace App\Http\Controllers;


use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function getHome()
    {
        return view('panels.admin.home');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function rejectAddRequest($id)
    {
        $profile  =   Profile::find($id);

        $res    = $profile->apartments()->defaultapartment()->first();

        $profile->apartments()->detach($res);

        return redirect()->back()
            ->withMessage('User Rejected')
            ->withStatus('danger');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function acceptAddRequest($id)
    {
        $profile  =   Profile::find($id);

        $res    = $profile->apartments()->defaultapartment()->first();

//        $profile->apartments()->updateExistingPivot($res , ['approved' => '1']);
        $profile->apartments()->detach($res);
        $profile->apartments()->attach($res , ['approved' => '1']);

        $profile->defaultApartment = Auth::user()->profile->defaultApartment; // set new added apartment as default
        $profile->save();

        return redirect()->back()
            ->withMessage('User Approved')
            ->withStatus('success');
    }

    // temporary code
    /**
     * Update the specified resource in storage.
     * Store Block / Flat and Floor Number.
     *
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $apartment = Apartment::find($id);
        $profile = Auth::user()->profile;

        $block_no       =   $request->input('blockno'); // get block_no from profileform
        $floor_no       =   $request->input('floorno'); // get floor_no from profileform

        $isOwner        =   $request->input('isOwner'); // get Owner from profileform
        $lock           =   $request->input('lock');    // get lock status from profileform

        $profile->apartments()->detach($apartment);
        $profile->apartments()->attach($apartment , ['approved' => '1', 'block_no' => $block_no, 'floor_no' => $floor_no, 'isOwner' => $isOwner, 'lock' => $lock]);

        return redirect()->back()
            ->withMessage('Block / Flat Number Updated')
            ->withStatus('success');
    }



}