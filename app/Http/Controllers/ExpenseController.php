<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpenseRequest;
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

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists      = Transaction::with('banks')
                        ->where('type', '=', 'Expense')
                        ->DefaultApartment()
                        ->orderBy('created_at','DESC')
                        ->paginate(10);
        return view('expense.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account        = ['' => 'Choose an Account'] + Bankncash::DefaultApartment()->lists('account', 'id')->toArray();
//        $payeeid        = ['0' => 'Select Payee'] + Crm_account::lists('account', 'id')->toArray();
        $payeeid        = ['0' => 'Select Payer'] + Profile::DefaultApartmentProfile()->lists('account', 'id')->toArray();
        $payment        = ['0' => 'Select Payment Method'] + PMethod::lists('name', 'id')->toArray();
        $category       = Sys_cat::where('type', '=', 'Income')->lists('name','id')->toArray();
        $tag            = Sys_tag::where('type', '=', 'Income')->lists('text','id');

        $disable        = null;

        return view('expense.create', compact('account', 'payeeid', 'payment', 'category', 'tag', 'disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ExpenseRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpenseRequest $request)
    {
        $account            =   Bankncash::DefaultApartment()->find($request->account_id);

        $bal                =   $account->balance;
        $amount             =   $request->amount;
        $nbal               =   $bal - $amount;

        Bankncash::find($request->account_id)->update([ 'balance' => $nbal ]);

        Transaction::create([
            'apartment_id'                  => Auth::user()->profile->defaultApartment,
            'account_id'                    => $request->account_id,
            'type'                          => 'Expense',
            'category_id'                   => $request->category_id,
            'amount'                        => $request->amount,
            'payee_id'                      => $request->payee_id,
            'payment_id'                    => $request->payment_id,
            'dr'                            => $request->amount,
            'bal'                           => $nbal,
            'description'                   => ucfirst($request->description),
            'date'                          => $request->date,
            'tags'                          => $request->tags,

        ]);

        return redirect()->route('expense.index')
            ->withMessage('Expense Added Successfully')
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
            $payeeid        = ['0' => 'Select Payee'] + Crm_account::lists('account', 'id')->toArray();
            $payment        = ['0' => 'Select Payment Method'] + PMethod::lists('name', 'id')->toArray();
            $category       = Sys_cat::where('type', '=', 'Income')->lists('name','id')->toArray();
            $tag            = Sys_tag::where('type', '=', 'Income')->lists('text','id');

            $disable        = 1;

        } catch (Exception $e) {
            return redirect()->back()
                ->withMessage('Error Editing Expense, Possibly it is already Deleted')
                ->withStatus('error');
        }

        return view('expense.edit', compact('list', 'account', 'payeeid', 'payment', 'category', 'tag', 'disable'));
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
        $input = $request->except(['account','amount']);

        Transaction::find($id)->update($input);

        return redirect()->route('expense.index')
            ->withMessage('Expense has been Updated')
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
        $nbal               =       $bal + $amount;
        $account->update([ 'balance' => $nbal ]);
        $list->delete();

        } catch (Exception $e) {
            return redirect()->back()
                ->withMessage('Error deleting Expense, Possibly it is already Deleted')
                ->withStatus('error');
        }

        return redirect()->route('expense.index', compact('list'))
            ->withMessage('Expenses has been Deleted')
            ->withStatus('success');
    }
}
