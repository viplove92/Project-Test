<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'sys_items';

    protected $fillable =   [ 'name', 'unit', 'sales_price', 'item_number', 'description', 'type',
                            'track_inventory', 'negative_stock', 'available', 'status', 'added',
                            'last_sold', 'e'
                            ];
}
