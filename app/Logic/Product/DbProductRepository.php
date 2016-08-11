<?php namespace Product;

use App\Models\Item;

class DbProductRepository implements ProductRepository{

    public function selectAll()
    {
        return Item::where('type', '=', 'Product')->get();
    }

    public function selectTen()
    {
        return Item::where('type', '=', 'Product')->paginate(10);
    }

    public function find($id)
    {
        return Item::find($id);
    }

    public function delete($id)
    {
        Item::find($id)->delete();
    }
}