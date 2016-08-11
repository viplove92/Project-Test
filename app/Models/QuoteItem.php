<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteItem extends Model
{
    protected $table = 'sys_quoteitems';

    protected $fillable = ['quote_id', 'itemcode', 'description', 'qty', 'price', 'total', 'taxable'];
}
