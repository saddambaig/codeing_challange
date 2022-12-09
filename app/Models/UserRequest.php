<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    use HasFactory;
    protected $fillable=['sender_id','receiver_id','status'];
    public function requestUser(){
        return $this->belongsTo('App\Models\User','sender_id','id');
    }
    public function receiverRequest(){
        return $this->belongsTo('App\Models\User','receiver_id','id');
    }
}
