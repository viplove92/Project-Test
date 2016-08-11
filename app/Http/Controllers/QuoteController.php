<?php

namespace App\Http\Controllers;

use App\Models\Crm_account;
use App\Models\Quote;
use App\Models\QuoteItem;
use App\Models\Sys_tag;
use App\Models\SysTax;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('quote.index');
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
        $lists               =   Crm_account::all();

        $tags               =       Sys_tag::lists('text', 'id');

        $disable        = null;

        return view ('quote.create', compact('disable', 'crm', 'stage', 'tax', 'tags', 'date_created', 'date_expiry', 'lists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
dd($request->all());
//        $input                  =   $request->all();
//        $input['apartment_id']  =   Auth::user()->profile->defaultApartment;
//        $input['profile_id']    =   Auth::user()->profile->id;
//        $quote = Quote::create($input);

        $quote                   =       new Quote;
        $quote->apartment_id     =       Auth::user()->profile->defaultApartment;
        $quote->profile_id       =       Auth::user()->profile->id;
        $quote->subject          =       $request->subject;
        $quote->stage            =       $request->stage;
        $quote->validuntil       =       $request->date_expiry;
        $quote->invoicenum       =       '1000';
        $quote->discount_type    =       'value';
        $quote->tax1             =       $request->oc;
        $quote->tax2             =       $request->tax;
        $quote->save();


        for ($idx = 0; $idx < count($request->description); $idx++)
        {
            $item                  =       new QuoteItem;
            $item->quote_id        =       $quote->id;
            $item->description     =       ucfirst($request->description[$idx]);
            $item->qty             =       $request->qty[$idx];
            $item->price           =       $request->price[$idx];
            $item->total           =       $request->qty[$idx] * $request->price[$idx];
            $item->taxable         =       $request->taxable[$idx];
            $item->save();
        }

        return redirect()->back()
            ->withMessage('Quotation Created')
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
