<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use MaddHatter\LaravelFullcalendar\Event;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;


class Transaction extends Model implements LogsActivityInterface, Event
{

    use LogsActivity;

//    protected $table = 'sys_transactions';
//    protected $table = 'easy_transactions';
    protected $table = 'easymanage_transaction';

    protected $fillable = [ 'account', 'type', 'category_id', 'amount', 'payer_id', 'payee_id', 'payer',
                            'payee', 'method', 'ref', 'status', 'description', 'tags', 'tax', 'date',
                            'dr', 'cr', 'bal', 'iid', 'account_id','apartment_id', 'payment_id', 'fromto'];

    public function crm_account()
    {
        return $this->hasMany('App\Models\Crm_account');
    }

    public function pmethods()
    {
        return $this->hasMany('App\Models\Pmethod');
    }

    public function categories()
    {
        return $this->hasMany('App\Models\Sys_cat');
    }

    public function tags()
    {
        return $this->hasMany('App\Models\Sys_tag');
    }

    public function banks()
    {
        return $this->belongsTo('App\Models\Bankncash', 'account_id');
    }

    //    Activity Logger
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Transaction ( ' . $this->id .' ) : ' . $this->type . ' of ' . $this->amount . ' was created';
        }

        if ($eventName == 'updated')
        {
            return 'Transaction ( ' . $this->id .' ) : ' . $this->type . ' of ' . $this->amount . ' was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Transaction ( ' . $this->id .' ) : ' . $this->type . ' of ' . $this->amount . ' was deleted';
        }

        return '';
    }



    public function getEventOptions()
    {
        return [
            'color' => $this->background_color,
            //etc
        ];
    }

    protected $dates = ['start', 'end'];

    /**
     * Get the event's id number
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return (bool)$this->all_day;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    public function scopeDefaultApartment($query)
    {
        return $query->where('apartment_id','=', Auth::user()->profile->defaultApartment);
    }

}
