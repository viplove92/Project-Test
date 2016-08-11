<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Poll extends Model
{
    protected $table = 'polls';

    protected $fillable = ['title', 'apartment_id', 'profile_id'];

    public function options()
    {
        return $this->hasMany('App\Models\Option');
    }

    public function profile()
    {
        return $this->belongsToMany('App\Models\Profile','profile_poll')
            ->withPivot('option_id', 'option')
            ->withTimestamps();
    }

    public function scopeDefaultApartment($query)
    {
        return $query->where('apartment_id', '=', Auth::user()->profile->defaultApartment);
    }


}
