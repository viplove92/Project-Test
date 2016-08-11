<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComplaintSupport extends Model
{
    protected $table = 'complaint_supports';

    protected $fillable = [ 'profile_id',
                            'complaint_id',
                            'up',
                            'down'];

    /**
     * ComplaintSupport belongsTo Complaint.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    public function complaint()
    {
        return $this->belongsTo('App\Models\Complaint');
    }
}
