<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;


class Complaint extends Model implements LogsActivityInterface
{

    use LogsActivity;

    protected $table = 'complaints';

    protected $dates    = [ 'readDate',
                            'processingDate',
                            'closeDate'];

    protected $fillable = [ 'profile_id',
                            'apartment_id',
                            'subject',
                            'type',
                            'area',
                            'desc',
                            'closedRemark',
                            'photo_url',
                            'isRead',
                            'isClosed'];


    /**
     * Complaints is associated with One Apartment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    public function apartment()
    {
        return $this->belongsTo('App\Models\Apartment');
    }

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }


    public function scopeDefaultApartment($query)
    {
        return $query->where('apartment_id', '=', Auth::user()->profile->defaultApartment);
    }

    //    Activity Logger
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Complaint "' . $this->type . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Complaint "' . $this->type . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Complaint "' . $this->type . '" was deleted';
        }

        return '';
    }

}
