<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'sys_cats';

    protected $fillable = ['name','type','sorder'];
}
