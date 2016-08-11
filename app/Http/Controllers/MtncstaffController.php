<?php

namespace App\Http\Controllers;

use App\Http\Requests\MtncstaffRequest;
use App\Models\Mtncstaff;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MtncstaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mtncstaffs = Mtncstaff::all();

        return view('mtncstaff.index')->withMtncstaffs($mtncstaffs);

//        return view('mtncstaff.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mtncstaff.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MtncstaffRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MtncstaffRequest $request)
    {

        Mtncstaff::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mtncstaff = Mtncstaff::findOrFail($id);
        return view('mtncstaff.show')->withMtncstaff($mtncstaff);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mtncstaff = Mtncstaff::findOrFail($id);

        return view('mtncstaff.edit')->withMtncstaff($mtncstaff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MtncstaffRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(MtncstaffRequest $request, $id)
    {
        $mtncstaff = Mtncstaff::findOrFail($id);

        $input = $request->all();

        $mtncstaff->fill($input)->save();

        return view('mtncstaff.show')->withMtncstaff($mtncstaff);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mtncstaff = Mtncstaff::findorfail($id);

        if ($mtncstaff->delete())
        {
            return redirect()->route('mtncstaffs.index')
                ->with('status', 'success')
                ->with('message','Staff Deleted');
        }
        else
        {
            return redirect()->route('mtncstaffs.index')
                ->with('status', 'danger')
                ->with('message','Staff already deleted or Some Problem Occured');
        }


    }
}
