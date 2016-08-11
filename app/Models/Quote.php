<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table = 'sys_quotes';

    protected $fillable =   [
                            'subject', 'stage', 'validuntil', 'user_id', 'apartment_id', 'invoicenum', 'cn', 'account',
                            'firstname', 'lastname', 'companyname', 'email', 'address1', 'address2', 'city',
                            'state', 'postcode', 'country', 'phonenumber', 'currency', 'subtotal', 'discount_type',
                            'discount_value', 'discount', 'taxname', 'taxrate', 'tax1', 'tax2', 'total',
                            'proposal', 'customernotes', 'adminnotes', 'datesent', 'dateaccepted', 'vtoken'
                            ];
}
