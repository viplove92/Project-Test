<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'options';

    protected $fillable = ['poll_id', 'option'];

    public function poll()
    {
        return $this->belongsTo('App\Models\Poll');
    }


}
