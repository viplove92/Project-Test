<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SysTax extends Model
{
    protected $table = 'sys_tax';

    protected $fillable = ['name', 'state', 'country', 'rate', 'aid', 'bal'];
}
