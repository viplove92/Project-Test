<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sys_cat extends Model
{
    protected $table = 'sys_cats';

    protected $fillable = ['name', 'type'];

    public function transactions()
    {
        return $this->belongsTo('App\Models\Transaction');
    }

}
