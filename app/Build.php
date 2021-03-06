<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    protected $fillable = ['user_id', 'product_id', 'quantity', 'price'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
