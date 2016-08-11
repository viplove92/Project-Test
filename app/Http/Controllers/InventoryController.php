<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventoryRequest;
use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists      =   Inventory::paginate(10);
        return view('inventory.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disable     =       null;

        return view('inventory.create', compact('disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param InventoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(InventoryRequest $request)
    {
        Inventory::create($request->all());

        return redirect()->route('inventory.index')
            ->withMessage('Inventory Added Successfully')
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
        $list           =       Inventory::find($id);
        $disable        =   1;
        return view ('inventory.edit', compact('disable','list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param InventoryRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(InventoryRequest $request, $id)
    {
        Inventory::find($id)->update($request->all());

        return redirect()->route('inventory.index')
            ->withMessage('Inventory Updated Successfully')
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
        $staff = Inventory::find($id);
        $staff->delete();

        return redirect()->route('inventory.index')
            ->withMessage('Inventory Item Deleted')
            ->withStatus('success');
    }
}
