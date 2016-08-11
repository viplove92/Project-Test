<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';

    protected $dates = ['dob'];

    protected $fillable =   [
                                'staff_name',
                                'alias',
                                'staff_role_id',
                                'gender_id',
                                'dob',
                                'expiry_card',
                                'mobile_no',
                                'nationality_id',
                                'address',
                                'first_ref',
                                'attachment_url',
                                'photo_url'
                            ];

    /**
     * Staff know many Languages.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function language()
    {
        return $this->belongsToMany('App\Models\Language', 'language_staff')
            ->withTimestamps();
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gender()
    {
        return $this->belongsTo('App\Models\Gender');
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nationality()
    {
        return $this->belongsTo('App\Models\Nationality');
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staff_role()
    {
        return $this->belongsTo('App\Models\StaffRole');
    }



}
