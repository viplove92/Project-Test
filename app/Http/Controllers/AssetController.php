<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssetRequest;
use App\Models\Asset;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists      =   Asset::paginate(10);
        return view('asset.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disable        =   null;
        return view('asset.create', compact('disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AssetRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssetRequest $request)
    {
        Asset::create($request->all());
        return redirect()->route('asset.index')
            ->withMessage('Asset Added Successfully')
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
        $list           =       Asset::find($id);
        $disable        =       1;
        return view ('asset.edit', compact('disable','list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AssetRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssetRequest $request, $id)
    {
        Asset::find($id)->update($request->all());
        return redirect()->route('asset.index')
            ->withMessage('Asset Updated Successfully')
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
        $staff = Asset::find($id);
        $staff->delete();

        return redirect()->route('asset.index')
            ->withMessage('Asset Item Deleted')
            ->withStatus('success');
    }
}
