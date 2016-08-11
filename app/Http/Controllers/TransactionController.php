<?php namespace App\Http\Controllers;

use App\Models\Bankncash;
use App\Models\Transaction;
use App\Http\Requests;

class TransactionController extends Controller
{

    public function getTransactions()
    {
        $lists          =   Transaction::with('banks')
                                ->DefaultApartment()
                                ->orderBy('created_at','DESC')
                                ->paginate(20);

        $accounts       =   Bankncash::DefaultApartment()
                                ->get();

        return view('transaction.transactions', compact('lists', 'accounts'));
    }

    public function getSpecificTransactions($id)
    {
        $acc_name       =   Transaction::with('banks')
                                ->DefaultApartment()
                                ->where('account_id','=', $id)
                                ->first();

        $lists          =   Transaction::where('account_id','=', $id)
                                ->DefaultApartment()
                                ->latest()
                                ->paginate(20);

        $accounts       =   Bankncash::DefaultApartment()->get();

        $last           =   Transaction::with('banks')
                                ->where('account_id','=', $id)
                                ->DefaultApartment()
                                ->latest()
                                ->first();

        return view('transaction.specifictransactions', compact('lists', 'accounts', 'acc_name', 'last'));
    }

    public function getBalanceSheet()
    {
        $lists  = Bankncash::DefaultApartment()->paginate(10);
        $tbal   = Bankncash::DefaultApartment()->get()->sum('balance');

        return view('transaction.balance', compact('lists', 'tbal'));
    }

}
