<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = ['transaction_id', 'product_id', 'quantity', 'price'];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function trans_head(){
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
}
