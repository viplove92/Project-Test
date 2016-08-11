<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrmRequest;
use App\Models\Apartment;
use App\Models\Crm_account;
use App\Models\Sys_tag;
use App\Models\SysLog;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CrmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin      =       Apartment::find(Auth::user()->profile->defaultApartment);

        $usertype   =       $admin->profile->contains(Auth::user()->profile->id);

        if($usertype == true)
        {
            $lists           =   Apartment::find(Auth::user()->profile->defaultApartment)
                                    ->profiles()
                                    ->approved()
                                    ->paginate(12);

            return view('crm.index', compact('lists'));
        }
        elseif($usertype == false)
        {
            $lists       =       Transaction::where('payer_id', '=', Auth::user()->profile->id)->get();

            return view('crm.profileshow', compact('lists'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags       =       Sys_tag::lists('text', 'id');

        $crm                = null;
        $disable            = null;

        return view('crm.create', compact('tags', 'crm', 'disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CrmRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrmRequest $request)
    {
        Crm_account::create($request->all());

        return redirect()->back()
            ->withMessage('Contact Added')
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
        $lists       =       Transaction::where('payer_id', '=', $id)->get();

        return view('crm.profileshow', compact('lists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = Crm_account::find($id);

        $disable            = null;

        return view('crm.edit', compact('list', 'disable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CrmRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrmRequest $request, $id)
    {
       Crm_account::find($id)->update($request->all());

        return redirect()->back()
            ->withMessage('Contact has been Updated')
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
        $crm = Crm_account::findOrFail($id);
        $crm->delete();

        return redirect()->route('crm.index', compact('crm'))
            ->withMessage('Contact has been Deleted')
            ->withStatus('success');
    }
}
