<?php namespace Easymanage;

use App\Models\Item;

class DbProductRepository implements ProductRepositoryInterface {

    public function selectAll()
    {
        return Item::where('type', '=', 'Product')->paginate(10);
    }

    public function find($id)
    {
        return Item::find($id);
    }
}