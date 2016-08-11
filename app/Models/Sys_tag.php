<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sys_tag extends Model
{
    protected $table = 'sys_tags';

    protected $fillable = ['text', 'type'];


    public function crm()
    {
        return $this->belongsToMany('App\Models\Crm_account', 'crm_tag')
            ->withTimestamps();
    }

    public function transactions()
    {
        return $this->belongsTo('App\Models\Transaction');
    }
}
