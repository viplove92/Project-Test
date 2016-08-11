<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisitorRequest;
use App\Models\User;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors = Visitor::whereNull('punch_out')->orderBy('punch_in', 'DESC')->get();

        $recents = Visitor::whereNotNull('punch_out')->orderBy('punch_out', 'DESC')->get();

        return view('visitors.index', compact('visitors', 'recents'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::lists('first_name','first_name');
        return view('visitors.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param VisitorRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisitorRequest $request)
    {
        $input = $request->all();
        $input['punch_in'] = Carbon::now();
dd($input);
        Visitor::create($input);

        return redirect()->route('visitors.index')
                ->with('status','success')
                ->with('message', 'visitor created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recent = Visitor::findorfail($id);

        $sec = $recent->punch_out->diffInSeconds($recent->punch_in);
        $min = $recent->punch_out->diffInMinutes($recent->punch_in);
        $hour = $recent->punch_out->diffInHours($recent->punch_in);
        $day = $recent->punch_out->diffInDays($recent->punch_in);

        $ago2 = $recent->punch_out->diffForHumans();

        return view('visitors.show', compact('recent','ago2', 'min' , 'hour', 'day', 'sec'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $request)
    {
        $apartment = Apartment::find($id);
        $profile = Auth::user()->profile;

        $block_no       =   $request->input('blockno'); // get block_no from profileform
        $floor_no       =   $request->input('floorno'); // get floor_no from profileform

//        $profile->apartments()->updateExistingPivot($profile->defaultApartment , ['approved' => '1', 'block_no' => $block_no, 'floor_no' => $floor_no]);
        $profile->apartments()->detach($apartment);
        $profile->apartments()->attach($apartment , ['approved' => '1', 'block_no' => $block_no, 'floor_no' => $floor_no]);

        return redirect()->back()
            ->withMessage('Block / Flat Number Updated')
            ->withStatus('success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $visitor             =   Visitor::find($id);

        $visitor->punch_out  =   Carbon::now();

        $visitor->save();

        return redirect()->route('visitors.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
