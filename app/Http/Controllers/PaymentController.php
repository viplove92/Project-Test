<?php

namespace App\Http\Controllers;

use App\Models\Bankncash;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view ('payment.payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        if($request->holder_name == ('Suchay Janbandhu' && 'suchay janbandhu') &&
            $request->card_number == '1234567890' &&
            $request->month == 'Jul (07)' &&
            $request->year == '2021' &&
            $request->cvv == '123'
        )
        {

            $account            =   Bankncash::DefaultApartment()->find(18);

            $bal                =   $account->balance;
            $amount             =   787;
            $nbal               =   $bal + $amount;

            Bankncash::find(18)->update([ 'balance' => $nbal ]);

            Transaction::create([
                'apartment_id'                  => Auth::user()->profile->defaultApartment,
                'account_id'                    => 18,
                'type'                          => 'Income',
                'category_id'                   => 61,
                'amount'                        => 787,
                'payer_id'                      => Auth::user()->profile->id,
                'payment_id'                    => $request->payment_id,
                'cr'                            => 787,
                'bal'                           => $nbal,
                'description'                   => 'Maintenance Payment for the Month of '. Carbon::now()->month,
                'date'                          => Carbon::now(),
            ]);

            return redirect()->route('user.home')
                ->withMessage('Transaction Completed Successfully')
                ->withStatus('success');
        }
        else
        {
            return redirect()->route('user.home')
                ->withMessage('Transaction Could not complete')
                ->withStatus('error');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
