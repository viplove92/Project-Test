<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransferRequest;
use App\Models\Bankncash;
use App\Models\PMethod;
use App\Models\Sys_cat;
use App\Models\Sys_tag;
use App\Models\SysLog;
use App\Models\Transaction;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists      = Transaction::with('banks')
                        ->where('type', '=', 'Transfer')
                        ->DefaultApartment()
                        ->latest()
                        ->paginate(20);

        return view('transfer.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account        = ['' => 'Choose an Account'] + Bankncash::DefaultApartment()->lists('account', 'id')->toArray();
        $payment        = ['0' => 'Select Payment Method'] + PMethod::lists('name', 'id')->toArray();
        $category       = Sys_cat::where('type', '=', 'Income')->lists('name','id')->toArray();
        $tag            = Sys_tag::where('type', '=', 'Income')->lists('text','id');

        $disable        = null;

        return view('transfer.create', compact('account', 'payment', 'category', 'tag', 'disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TransferRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransferRequest $request)
    {
        $from_account               =   Bankncash::find($request->from_account);
        $to_account                 =   Bankncash::find($request->to_account);

        $from_balance               =   $from_account->balance;
        $to_balance                 =   $to_account->balance;

        $amount                     =   $request->amount;

        $newfrom                    =   $from_balance - $amount;
        $newto                      =   $to_balance + $amount;

        Bankncash::find($request->from_account)->update([ 'balance' => $newfrom ]);

        Bankncash::find($request->to_account)->update([ 'balance' => $newto ]);

        Transaction::create([
            'apartment_id'                  => Auth::user()->profile->defaultApartment,
            'account_id'                    => $request->from_account,
            'type'                          => 'Transfer',
            'category_id'                   => null,
            'amount'                        => $request->amount,
            'fromto'                        => 'From',
            'payment_id'                    => $request->payment_id,
            'dr'                            => $request->amount,
            'bal'                           => $newfrom,
            'description'                   => ucfirst($request->description),
            'date'                          => $request->date,
            'tags'                          => $request->tags,
        ]);

        Transaction::create([
            'apartment_id'                  => Auth::user()->profile->defaultApartment,
            'account_id'                    => $request->to_account,
            'type'                          => 'Transfer',
            'category_id'                   => null,
            'amount'                        => $request->amount,
            'fromto'                        => 'To',
            'payment_id'                    => $request->payment_id,
            'cr'                            => $request->amount,
            'bal'                           => $newto,
            'description'                   => ucfirst($request->description),
            'date'                          => $request->date,
        ]);

        return redirect()->route('transfer.index')
            ->withMessage('Transferred Successfully')
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
        try {

        $list           =   Transaction::find($id);
        $previd         =   $list->id - 1;
        $prevlist       =   Transaction::find($previd);
        $amount         =   $list->amount;
        $sourcebankid   =   Transaction::find($previd)->account_id;
        $tobankid       =   Transaction::find($id)->account_id;

        $from_balance   =   Bankncash::find($sourcebankid)->balance;
        $to_balance     =   Bankncash::find($tobankid)->balance;

        $newfrom_bal    =   $from_balance + $amount;
        $newto_bal      =   $to_balance - $amount;

        Bankncash::find($sourcebankid)->update(['balance' => $newfrom_bal]);
        Bankncash::find($tobankid)->update(['balance' => $newto_bal]);

        $list->delete();
        $prevlist->delete();

        } catch (Exception $e) {
            return redirect()->back()
                ->withMessage('Error Reverting Transaction, Possibly it is already Deleted')
                ->withStatus('error');
        }

        return redirect()->back()
            ->withMessage('Transfer Reverted')
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
        try {

        $list           =   Transaction::find($id);
        $previd         =   $list->id - 1;
        $prevlist       =   Transaction::find($previd);
        $amount         =   $list->amount;
        $sourcebankid   =   Transaction::find($previd)->account_id;
        $tobankid       =   Transaction::find($id)->account_id;

        $from_balance   =   Bankncash::find($sourcebankid)->balance;
        $to_balance     =   Bankncash::find($tobankid)->balance;

        $newfrom_bal    =   $from_balance + $amount;
        $newto_bal      =   $to_balance - $amount;

        Bankncash::find($sourcebankid)->update(['balance' => $newfrom_bal]);
        Bankncash::find($tobankid)->update(['balance' => $newto_bal]);

        $list->delete();
        $prevlist->delete();

        } catch (Exception $e) {
            return redirect()->back()
                ->withMessage('Error Reverting Transaction, Possibly it is already Deleted')
                ->withStatus('error');
        }

        return redirect()->back()
            ->withMessage('Transfer Reverted')
            ->withStatus('success');

    }
}
