<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    protected $table = 'apartment_profile_admin';


    /**
     * Apartment hasMany Admin
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function admin()
    {
        return $this->hasMany('App\Models\Profile');
    }

}
