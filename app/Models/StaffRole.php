<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffRole extends Model
{
    protected $fillable =   [
                                'staff_name',
                            ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function staff()
    {
        return $this->hasOne('App\Models\Staff');
    }
}
