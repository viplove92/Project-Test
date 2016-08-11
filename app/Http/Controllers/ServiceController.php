<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Item::where('type', '=', 'Service')->paginate(10);

        return view('service.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disable        = null;

        return view('service.create', compact('disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $input = $request->all();
        $input['type'] = 'Service';

        Item::create($input);

        return redirect()->back()
            ->withMessage('Service Added')
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
        $list   =   Item::findorfail($id);

        $disable        = 1;

        return view ('service.edit', compact('list','disable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $input = $request->all();
        $input['type'] = 'Service';

        Item::find($id)->update($input);

        return redirect()->route('product.index')
            ->withMessage('Service has been Updated')
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
        $list = Item::findOrFail($id);
        $list->delete();

        return redirect()->route('service.index', compact('list'))
            ->withMessage('Service has been Deleted')
            ->withStatus('success');
    }
}
