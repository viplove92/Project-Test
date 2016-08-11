<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable =   [
                                'apartment_id', 'display_name', 'brand_name',
                                'model_name', 'serial_no', 'desc', 'purchase_date',
                                'qty', 'price', 'sub_total', 'tax', 'total'
                            ];
}
