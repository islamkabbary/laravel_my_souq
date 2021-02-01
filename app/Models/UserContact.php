<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    use HasFactory;



    public function user(){
        return $this->belongsTo(user::class , 'user_id' , 'id');
    }


    public function order(){
        return $this->hasMany(Order::class , 'shipped_address_id' , 'id');
    }
}



