<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = ['apartment_id', 'due_date', 'amount', 'fine', 'grace'];

    public function scopeDefaultApartment($query)
    {
        return $query->where('apartment_id', '=', Auth::user()->profile->defaultApartment);
    }
}
