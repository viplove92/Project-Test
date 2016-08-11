<?php

namespace App\Http\Controllers;

use App\Models\Crm_account;
use App\Models\Sys_tag;
use App\Models\SysTax;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date_created       =   Carbon::now();
        $date_expiry        =   Carbon::now()->addMonth(1);

        $crm                = ['' => 'Select Contact'] + Crm_account::lists('account', 'id')->toArray();
        $stage              = ['Draft' => 'Draft', 'Delivered' => 'Delivered', 'Accepted' => 'Accepted', 'Lost' => 'Lost', 'Dead' => 'Dead' ];
        $tax                = ['' => 'None'] + SysTax::lists('name', 'id')->toArray();

        $tags               =       Sys_tag::lists('text', 'id');

        $disable        = null;

        return view ('invoice.create', compact('disable', 'crm', 'stage', 'tax', 'tags', 'date_created', 'date_expiry'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
