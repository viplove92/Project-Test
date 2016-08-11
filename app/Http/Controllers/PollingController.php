<?php

namespace App\Http\Controllers;

use App\Http\Requests\PollRequest;
use App\Models\Apartment;
use App\Models\Option;
use App\Models\Poll;
use App\Models\Profile;
use Exception;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PollingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lists      =   Poll::DefaultApartment()->latest()->paginate(10);

        return view ('polls.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $disable        = null;

        return view('polls.create', compact('disable'));
    }

    /**
     * Store a newly created resource in storage.
     * @param PollRequest $request
     * @return
     */
    public function store(PollRequest $request)
    {
        $input                  =   $request->only('title');
        $input['apartment_id']  =   Auth::user()->profile->defaultApartment;
        $input['profile_id']    =   Auth::user()->profile->id;

        $poll = Poll::create($input);

        for ($idx = 0; $idx < count($request->option); $idx++)
        {
            $option = new Option;
            $option->poll_id       = $poll->id;
            $option->option        = ucfirst($request->option[$idx]);
            $option->save();
        }

        return redirect()->back()
            ->withMessage('Poll Created')
            ->withStatus('success');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $poll               =       Poll::with('options')->find($id);
        $profile            =       Profile::find(Auth::user()->profile->id);

        if($poll->profile->contains($profile->id)) {
                    $profiles           =       Apartment::find(Auth::user()->profile->defaultApartment)
                                                ->profiles()
                                                ->approved()
                                                ->get();

            $stats = DB::table('profile_poll')
                ->wherePollId($id)
                ->groupBy('option_id')
                ->get([
                    DB::raw('option_id as option'),
                    DB::raw('count(option_id) as option_count'),
                ]);

            if(count($stats) > 0)
                foreach ($stats as $list){
                    $option[]           = Option::find($list->option)->option;
                    $option_count[]     = intval($list->option_count);
                }

            else
            {
                $option[]               = 'No Polling held yet';
                $option_count[]         = '0';
            }

                $title               =   $poll->title;

            return view('polls.result', compact('profiles', 'title', 'stats', 'poll', 'option', 'option_count'));
        }
        else {
            $list               =       Poll::with('options')->find($id);

            return view ('polls.show', compact('list'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $list       =      Poll::with('options')->find($id);

        $disable    =      1;

        return view ('polls.edit', compact('list', 'disable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $list = Poll::findOrFail($id);
            $list->delete();

        } catch (Exception $e) {
            return redirect()->back()
                ->withMessage('Error deleting Poll, Possibly it is already Deleted')
                ->withStatus('error');
        }

        return redirect()->route('polls.index', compact('list'))
            ->withMessage('Poll has been Deleted')
            ->withStatus('success');
    }

    public function voteUp(Request $request)
    {
        $poll           =       Option::with('poll')->find($request->option)->poll;

        $profile        =       Profile::find(Auth::user()->profile->id);

        if($poll->profile->contains($profile->id)) {
            return redirect()->back()
                ->withMessage('Your have already voted for this poll')
                ->withStatus('error');
        }
        else {

                $profile->poll()->attach($poll->id, ['option_id' => $request->option]);

                return redirect()->back()
                ->withMessage('Your Vote has been registered')
                ->withStatus('success');
        }

    }

    public function voteDown(Request $request)
    {


    }

}
