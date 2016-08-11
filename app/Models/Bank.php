<?php namespace App\Models;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

    use ElasticquentTrait;

    public $timestamps = false;

    protected $fillable =   [
                                'bank',
                                'ifsc',
                                'micrcode',
                                'branch',
                                'address',
                                'contact',
                                'city',
                                'district',
                                'state'
                            ];

    /**
     * Bank associated with Many Apartment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function apartment()
    {
        return $this->belongsToMany('App\Models\Apartment', 'apartment_bank')
            ->withTimestamps();
    }


}
