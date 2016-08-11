<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;

class Bankncash extends Model implements LogsActivityInterface
{
    use LogsActivity;

    protected $table = 'easy_accounts';

    protected $fillable = ['apartment_id', 'account', 'description', 'acc_number', 'balance'];

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction');
    }

    //    Activity Logger
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Bank ( ' . $this->id .' ) : "' . $this->account . '" was created with Initial Balance : ' . $this->balance ;
        }

        if ($eventName == 'updated')
        {
            return 'Bank ( ' . $this->id .' ) : "' . $this->account . '" was updated with new Balance : ' . $this->balance ;
        }

        if ($eventName == 'deleted')
        {
            return 'Bank ( ' . $this->id .' ) : "' . $this->account . '" was deleted';
        }

        return '';
    }



    public function scopeDefaultApartment($query)
    {
        return $query->where('apartment_id','=', Auth::user()->profile->defaultApartment);
    }
}
