<?php namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Item;
use App\Http\Requests;
use Product\ProductRepository;

class ProductController extends Controller
{

    private $product;

    /**
     * ProductController constructor.
     * @param ProductRepository $product
     */
    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }


    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $lists      =       $this->product->selectTen();

        return view('product.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disable        = null;

        return view('product.create', compact('disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $input              = $request->all();
        $input['type']      = 'Product';

        Item::create($input);

        return redirect()->route('product.index')
            ->withMessage('Product Added')
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
        $list           =   $this->product->find($id);
        $disable        =   1;

        return view ('product.edit', compact('list' , 'disable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $input              = $request->all();
        $input['type']      = 'Product';

        Item::find($id)->update($input);

        return redirect()->route('product.index')
            ->withMessage('Product has been Updated')
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
        $this->product->delete($id);

        return redirect()->route('product.index', compact('list'))
            ->withMessage('Product has been Deleted')
            ->withStatus('success');
    }
}
