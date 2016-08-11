<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMethod extends Model
{
    protected $table = 'sys_pmethods';

    protected $fillable = ['name'];

    public function transactions()
    {
        return $this->belongsTo('App\Models\Transaction');
    }


}
