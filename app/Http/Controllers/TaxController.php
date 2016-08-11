<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaxRequest;
use App\Models\SysLog;
use App\Models\SysTax;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lists      = SysTax::paginate(10);
        return view('tax.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $disable        = null;
        return view('tax.create', compact('disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TaxRequest $request
     * @return Response
     */
    public function store(TaxRequest $request)
    {
        $sid = SysTax::create([
            'name'                          => $request->name,
            'rate'                          => $request->rate,
        ]);

        SysLog::create([
            'type'                  =>  'Admin',
            'date'                  =>  Carbon::now(),
            'userid'                =>  Auth::user()->id,
            'ip'                    =>  $request->ip(),
            'description'           =>  'New Tax Rate added: '. $sid->name . ' [ TxID : ' . $sid->id . ' | ' . 'Rate : ' . $sid->rate . ' ]',
        ]);


        return redirect()->route('tax.index')
            ->withMessage('Tax Rate Added Successfully')
            ->withStatus('success');
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
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $list           = SysTax::find($id);
        $disable        = 1;

        return view('tax.edit', compact('list', 'disable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TaxRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(TaxRequest $request, $id)
    {
        $tid    = SysTax::find($id);

        SysLog::create([
            'type'                  =>  'Admin',
            'date'                  =>  Carbon::now(),
            'userid'                =>  Auth::user()->id,
            'ip'                    =>  $request->ip(),
            'description'           =>  'Tax Rate edited: '. $tid->name . ' [ TxID : ' . $tid->id . ' | ' . ' Old Rate : ' . $tid->rate . ' -> ' . ' New Rate : ' . $request->rate . ' ]',
        ]);

        $tid->update($request->all());

        return redirect()->route('tax.index')
            ->withMessage('Tax has been Updated')
            ->withStatus('success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param Request $request
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $list         =       SysTax::find($id);

        $list->delete();

        return redirect()->route('tax.index', compact('list'))
            ->withMessage('Tax Rate has been Deleted')
            ->withStatus('success');
    }
}
