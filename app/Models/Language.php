<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable =   [
                                'language_name'
                            ];


    /**
     * Language belongsToMany Staff.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function staff()
    {
        return $this->belongsToMany('App\Models\Staff', 'language_staff')
            ->withTimestamps();
    }
}
