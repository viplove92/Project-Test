<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;

class Crm_account extends Model implements LogsActivityInterface
{
    use LogsActivity;

    protected $table = 'crm_accounts';

    protected $fillable = ['account', 'company', 'email', 'phone', 'address', 'city', 'state', 'country', 'zip'];

    public function sys_tag()
    {
        return $this->belongsToMany('App\Models\Sys_tag', 'crm_tag')
            ->withTimestamps();
    }

    public function transactions()
    {
        return $this->belongsTo('App\Models\Transaction');
    }

    //    Activity Logger
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Customer Account ( ' . $this->id .' ) : "' . $this->account . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Customer Account ( ' . $this->id .' ) : "' . $this->account . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Customer Account ( ' . $this->id .' ) : "' . $this->account . '" was deleted';
        }

        return '';
    }

}
