<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'users_id',
        'inscurance_price',
        'shipping_price',
        'total_price',
        'transaction_status',
        'code',
    ];

    protected $hidden = [

    ];

    public function user(){
        return $this->belongsTo( User::class, 'users_id', 'id');
    }

    public function address(){
        return $this->hasOne( TransactionAddress::class, 'transactions_id', 'id');
    }

    public function detail(){
        return $this->hasMany( TransactionDetail::class, 'id', 'transactions_id');
    }
}
