<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Models\Gender;
use App\Models\Language;
use App\Models\Nationality;
use App\Models\Profile;
use App\Models\Staff;
use App\Models\StaffRole;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Staff::all();

        return view('staffs.index', compact('lists'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role           = StaffRole::lists('role_name', 'id');
        $gender         = Gender::lists('gender', 'id');
        $nationality    = Nationality::lists('nationality', 'id');
        $language       = Language::lists('language_name', 'id');

        $staff          = null;

        $disable        =   null;

        return view('staffs.create', compact('role','gender','nationality','language', 'staff', 'disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StaffRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffRequest $request)
    {

        $filename = 'blank-complaint.png';

        if(Input::file())
        {
            $string = str_random(20);
            $image = Input::file('image');
            $filename  = $string . time(). date('dmY') . '.' . $image->getClientOriginalExtension();

            $path = public_path('/images/staffs/' . $filename);

            Image::make($image->getRealPath())
                ->resize(null, 200, function ($constraint)
                { $constraint->aspectRatio(); })
                ->save($path, 60); // compress image quality to medium(60) and save image to specified path.
        }

        $input = $request->except('language_id','dob');
        $input['photo_url'] = $filename;


        $staff = Staff::create($input);

        if (count($request->get('language_id')) > 0)
        {
            $staff->language()->sync($request->get('language_id'));
        }

        return redirect()->route('staffs.index')
//        return redirect()->back()
            ->withMessage('Staff Details Added')
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
        try {

            $staffs = Staff::findOrFail($id);

            } catch (Exception $e) {
                return redirect()->back()
                    ->withMessage('Error showing Staff, Possibly it is not available')
                    ->withStatus('error');
            }

        return view ('staffs.show', compact('staffs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      try {


          $role = StaffRole::lists('role_name', 'id');
          $gender = Gender::lists('gender', 'id');
          $nationality = Nationality::lists('nationality', 'id');
          $language = Language::lists('language_name', 'id');

          $staff = Staff::findOrFail($id);

          $disable = 1;

      }catch (Exception $e) {


          return redirect()->back()
              ->withMessage('Error Editing Staffs, Possibly it is already Deleted')
              ->withStatus('error');
      }


        return view ('staffs.edit', compact('staff', 'role', 'gender', 'nationality', 'language', 'disable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StaffRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StaffRequest $request, $id)
    {
        $staff = Staff::findOrFail($id);

        $filename = $staff->photo_url ;

        if(Input::file())
        {

            $old = $staff->photo_url;
            $path = public_path().'/images/staffs/'.$old;

            if(File::exists($path)) File::delete($path);

            $string = str_random(20);
            $image = Input::file('image');
            $filename  = $string . time(). date('dmY') . '.' . $image->getClientOriginalExtension();

            $path = public_path('/images/staffs/' . $filename);

            Image::make($image->getRealPath())
                ->resize(300, null, function ($constraint)
                { $constraint->aspectRatio(); })
                ->save($path, 60); // compress image quality to medium(60) and save image to specified path.
        }

        $input = $request->all();
        $input['photo_url'] = $filename;

        $staff->fill($input)->save();

        if (count($request->get('language_id')) > 0)
        {
            $staff->language()->sync($request->get('language_id'));
        }

        return redirect()->route('staffs.show', compact('staff'))
            ->withMessage('Staff Details Updated')
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
        try {

            $staff = Staff::find($id);
            $staff->delete();
        } catch (Exception $e) {
            return redirect()->back()
                ->withMessage('Error deleting Staff, Possibly it is already Deleted')
                ->withStatus('error');
        }

        return redirect()->route('staffs.index')
            ->withMessage('Staff Deleted')
            ->withStatus('success');
    }
}
