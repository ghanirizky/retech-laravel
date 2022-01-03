<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceTransaction extends Model
{
    protected $fillable = ['user_id', 'status','address', 'type', 'kind', 'desc', 'last_time'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
