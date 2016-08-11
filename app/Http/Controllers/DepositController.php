<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepositRequest;
use App\Models\Bankncash;
use App\Models\Crm_account;
use App\Models\PMethod;
use App\Models\Profile;
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

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists      = Transaction::with('banks')
                        ->where('type', '=', 'Income')
                        ->DefaultApartment()
                        ->orderBy('created_at','DESC')
                        ->paginate(10);

        return view('deposit.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account        = ['' => 'Choose an Account'] + Bankncash::DefaultApartment()->lists('account', 'id')->toArray();
        $payerid        = ['0' => 'Select Payer'] + Crm_account::lists('account', 'id')->toArray();
        $payment        = ['0' => 'Select Payment Method'] + PMethod::lists('name', 'id')->toArray();
        $category       = Sys_cat::where('type', '=', 'Income')->lists('name','id')->toArray();
        $tag            = Sys_tag::where('type', '=', 'Income')->lists('text','id');

        $disable        = null;

        return view('deposit.create', compact('account', 'payerid', 'payment', 'category', 'tag', 'disable'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DepositRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepositRequest $request)
    {
        $account            =   Bankncash::DefaultApartment()->find($request->account_id);

        $bal                =   $account->balance;
        $amount             =   $request->amount;
        $nbal               =   $bal + $amount;

        Bankncash::find($request->account_id)->update([ 'balance' => $nbal ]);

        Transaction::create([
                'apartment_id'                  => Auth::user()->profile->defaultApartment,
                'account_id'                    => $request->account_id,
                'type'                          => 'Income',
                'category_id'                   => $request->category_id,
                'amount'                        => $request->amount,
                'payer_id'                      => $request->payer_id,
                'payment_id'                    => $request->payment_id,
                'cr'                            => $request->amount,
                'bal'                           => $nbal,
                'description'                   => ucfirst($request->description),
                'date'                          => $request->date,
                'tags'                          => $request->tags,
            ]);

        return redirect()->route('deposit.index')
                    ->withMessage('Deposit Added Successfully')
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

            $list           = Transaction::find($id);
            $account        = ['' => 'Choose an Account'] + Bankncash::DefaultApartment()->lists('account', 'id')->toArray();
//            $payerid        = ['0' => 'Select Payer'] + Crm_account::lists('account', 'id')->toArray();
            $payerid        = ['0' => 'Select Payer'] + Profile::DefaultApartmentProfile()->lists('account', 'id')->toArray();
            $payment        = ['0' => 'Select Payment Method'] + PMethod::lists('name', 'id')->toArray();
            $category       = Sys_cat::where('type', '=', 'Income')->lists('name','id')->toArray();
            $tag            = Sys_tag::where('type', '=', 'Income')->lists('text','id');

            $disable        = 1;
        } catch (Exception $e) {
            return redirect()->back()
                ->withMessage('Error Editing Deposit, Possibly it is already Deleted')
                ->withStatus('error');
        }

        return view('deposit.edit', compact('list', 'account', 'payerid', 'payment', 'category', 'tag', 'disable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $input = $request->except(['account','amount']);

        Transaction::find($id)->update($input);

        return redirect()->route('deposit.index')
            ->withMessage('Deposit has been Updated')
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

        $list               =       Transaction::findOrFail($id);
        $account            =       Bankncash::find($list->account_id);
        $bal                =       $account->balance;
        $amount             =       $list->amount;
        $nbal               =       $bal - $amount;
        $account->update([ 'balance' => $nbal ]);
        $list->delete();

        } catch (Exception $e) {
            return redirect()->back()
                ->withMessage('Error deleting Deposit, Possibly it is already Deleted')
                ->withStatus('error');
        }

        return redirect()->route('deposit.index', compact('list'))
            ->withMessage('Deposit has been Deleted')
            ->withStatus('success');
    }

}
