<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable =   [
                                'apartment_id', 'title',
                                'model_name', 'serial_no', 'desc',
                                'qty', 'price', 'sub_total', 'tax', 'total'
                            ];
}
