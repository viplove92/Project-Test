<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{

    protected $table = 'ledgers';

    protected $fillable =   [
                                'apartment_id',
                                'profile_id',
                                'lg_id',
                                'ledger_name',
                                'name',
                                'address_line1',
                                'address_line2',
                                'state_id',
                                'pincode'
                            ];

}
