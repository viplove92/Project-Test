<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Profile extends Model
{

    protected $table = 'profiles';
//    protected $table = 'easymanage_profile';

    protected $fillable = ['mobile_no', 'verified', 'gender_id'];

    /**
     * User is associated with One User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Apartment can have Group of Profiles
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function apartments()
    {
        return $this->belongsToMany('App\Models\Apartment', 'apartment_profile')
                    ->withPivot('approved', 'lock', 'isOwner', 'block_no', 'floor_no')
                    ->withTimestamps();
    }

    /**
     * Profile hasMany Complaint
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function complaint()
    {
        return $this->hasMany('App\Models\Complaint');
    }


    public function poll()
    {
        return $this->belongsToMany('App\Models\Poll','profile_poll')
                    ->withPivot('option_id', 'option')
                    ->withTimestamps();
    }

    /**
     * Profile belongsToMany Complaint
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gender()
    {
        return $this->belongsTo('App\Models\Gender');
    }


    /**
     * Apartment belongsToMany Admin (Profile).
     *
     * Apartment will have several Administrator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin()
    {
        return $this->belongsToMany('App\Models\Apartment', 'apartment_profile_admin')
                    ->withTimestamps();
    }



    /**
     * Scope a query to only include Approved users.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeApproved($query)
    {
        return $query->where('approved','=', '1');
    }

    /**
     * Scope a query to only include not Approved users.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNotApproved($query)
    {
        return $query->where('approved', 0);
    }


    /**
     * Scope a query to only include a default Apartment.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDefaultApartment($query)
    {
        return $query->where('apartment_id', '=', Auth::user()->profile->defaultApartment);
    }

    public function scopeDefaultApartmentProfile($query)
    {
        return $query->where('defaultApartment', '=', Auth::user()->profile->defaultApartment);
    }


    public function questions() {
        return $this->hasMany('Question','profile_id');
    }



}
