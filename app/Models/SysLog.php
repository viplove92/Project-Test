<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SysLog extends Model
{
    protected $table = 'sys_logs';

    protected $fillable = ['date', 'type', 'description', 'userid', 'ip'];
}
