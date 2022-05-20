<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionAddress extends Model
{
    protected $fillable = [
        'transactions_id',
        'address_one',
        'address_two',
        'zip_code',
        'phone_number',
        'region_id',
        'city_id',
    ];
}
