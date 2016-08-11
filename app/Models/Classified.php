<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    protected $table = 'classifieds';

    protected $fillable = ['title'];

    /**
     * Classifieds is associated with One Profile.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }
}
