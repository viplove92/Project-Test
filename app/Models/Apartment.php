<?php namespace App\Models;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;

class Apartment extends Model implements SluggableInterface,LogsActivityInterface
{

    use ElasticquentTrait;
    use SluggableTrait;
    use LogsActivity;

    protected $table = 'apartments';

    protected $fillable = ['name', 'address_line1', 'address_line2', 'address_line3',
        'city', 'state', 'country', 'pincode', 'lat', 'lng', 'wing', 'floor'];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    /**
     * Profiles will have Many Apartment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function profiles()
    {
        return $this->belongsToMany('App\Models\Profile', 'apartment_profile')
                    ->withPivot('approved', 'lock', 'isOwner', 'block_no', 'floor_no')
                    ->withTimestamps();
    }

    /**
     * Profiles(Admin) associated with Many Apartment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function profile()
    {
        return $this->belongsToMany('App\Models\Profile', 'apartment_profile_admin')
                    ->withTimestamps();
    }

    /**
     * Bank associated with Many Apartment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function bank()
    {
        return $this->belongsToMany('App\Models\Bank', 'apartment_bank')
                    ->withTimestamps();
    }



    /**
     * Apartment hasMany Complaint
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function complaints()
    {
        return $this->hasMany('App\Models\Complaint');
    }


    /**
     * Scope a query to only include active users.
     *
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeApproved($query)
    {
        return $query->where('approved','=', '1');
    }

    /**
     * Scope a query to only include inactive users.
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

//    Activity Logger
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Apartment "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Apartment "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Apartment "' . $this->name . '" was deleted';
        }

        return '';
    }

}
