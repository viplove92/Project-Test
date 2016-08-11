<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'visitors';

    protected $dates = ['punch_in', 'punch_out'];

    protected $fillable = [
        'first_name',
        'last_name',
        'mobile_no',
        'to_meet',
        'wing_no',
        'floor_no',
        'flat_no',
        'purpose',
        'punch_in'
    ];



}
