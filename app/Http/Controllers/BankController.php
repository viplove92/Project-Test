<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Bank;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     * Shows list of banks associated with default Apartment.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $da     = Auth::user()->profile->defaultApartment;
        $banks    = Apartment::find($da)->bank()->get();

        return view ('bank.index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Show Bank and Link to Apartment Accounts.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banks = Bank::findOrFail($id);

        return view ('bank.show', compact('banks'));
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


    /**
     * Links bank with apartment
     * @param $id
     */
    public function linkBank($id)
    {
        $apartment = Auth::user()->profile->defaultApartment;
        $bank = Bank::findorFail($id);

        if ($bank->apartment->contains($apartment))
        {
            $bank->apartment()->detach($apartment);
//            return redirect()->route('bank.show', [$bank->id])
            return redirect()->back()
                ->withMessage('Bank Un-Linked from your List.')
                ->withStatus('danger');
        }
        else
        {
//            $bank->apartment()->sync([$apartment]);
            $bank->apartment()->attach($apartment);
//            return redirect()->route('bank.show', [$bank->id])
            return redirect()->back()
                ->withMessage('Bank has been linked to the Apartment Accounts !')
                ->withStatus('success');
        }

    }


    /**
     * Search bank.
     * @return \Illuminate\View\View
     */
    public function searchbank()
    {
        $lists = Bank::searchByQuery([
            "bool" => [
                'must' => [
                    'multi_match' => [
                        'query' => Input::get('query', ''),
                        'fields' => [ "bank^6", "address^5", "ifsc^4", "branch^3", "micrcode^2"]
                    ],
                ],
                "should" => [
                    'match' => [
                        'contact' => [
                            "query" => Input::get('query', ''),
                            "type" => "phrase"
                        ]
                    ]
                ]
            ]
        ]);

        return view('bank.searchbank', compact('lists'));
    }



}
