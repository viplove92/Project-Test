<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $table = 'problems';

    protected $fillable = ['problem_types'];
}
