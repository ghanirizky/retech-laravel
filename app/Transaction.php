<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['user_id', 'type', 'shipping_type', 'total_price', 'payment_method'];
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
