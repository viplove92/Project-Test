<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    protected $fillable =   [
        'nationality'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function staff()
    {
        return $this->hasOne('App\Models\Staff');
    }

}
