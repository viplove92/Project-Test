<?php

namespace App\Http\Controllers;

use App\Http\Requests\BankncashRequest;
use App\Models\Bankncash;
use App\Models\SysLog;
use App\Models\Transaction;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class BankncashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Bankncash::DefaultApartment()->paginate(10);
        return view('bankncash.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disable    = null;

        return view('bankncash.create', compact('disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BankncashRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BankncashRequest $request)
    {
        $bank = Bankncash::create($request->all());

        if($request->balance > '0.00')
            Transaction::create([
                'apartment_id'                  => Auth::user()->profile->defaultApartment,
                'account_id'                    => $bank->id,
                'type'                          => 'Income',
                'category_id'                   => 1,
                'amount'                        => $request->balance,
                'payment_id'                    => 1,
                'cr'                            => $request->balance,
                'bal'                           => $request->balance,
                'description'                   => 'Initial Deposit',
                'date'                          => Carbon::now(),
            ]);

        return redirect()->route('bankncash.index')
            ->withMessage('Bank Account Added')
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
        return Bankncash::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list   =   Bankncash::findorfail($id);
        $disable    = 1;

        return view ('bankncash.edit', compact('list', 'disable'));
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
        Bankncash::find($id)->update($request->all());

        return redirect()->back()
            ->withMessage('Bank Account has been Updated')
            ->withStatus('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $list = Bankncash::find($id);
            $list->delete();

        } catch (Exception $e) {
            return redirect()->back()
                ->withMessage('Error deleting Bank Account, Possibly it is already Deleted')
                ->withStatus('error');
        }

        return redirect()->route('bankncash.index', compact('list'))
            ->withMessage('Bank Account has been Deleted')
            ->withStatus('success');

    }

    public function getAccountBalance()
    {
        $lists = Bankncash::DefaultApartment()->get();

        $tbal = Bankncash::DefaultApartment()->get()->sum('balance');

       return view('bankncash.balance', compact('lists','tbal'));
    }
}
