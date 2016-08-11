<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lists          =   Category::all();

        return view('category.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $type           =       ['Income' => 'Income', 'Expense' => 'Expense'];

        $disable        =       null;

        return view ('category.create', compact('type', 'disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return Response
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());

        return redirect()->route('category.index')
            ->withMessage('Category Added')
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
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $list           =       Category::find($id);

        $type           =       ['Income' => 'Income', 'Expense' => 'Expense'];

        $disable        =   1;

        return view ('category.edit', compact('list', 'disable', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(CategoryRequest $request, $id)
    {
        Category::find($id)->update($request->all());

        return redirect()->route('category.index')
            ->withMessage('Category Updated')
            ->withStatus('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $staff = Category::find($id);
        $staff->delete();

        return redirect()->route('category.index')
            ->withMessage('Category Deleted')
            ->withStatus('success');
    }
}
