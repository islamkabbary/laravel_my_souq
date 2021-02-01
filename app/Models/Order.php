<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function order_product(){
        return $this->hasMany(OrderProduct::class , 'order_id' , 'id');
    }

    public function user(){
        return $this->belongsTo(user::class , "user_id" , "id");
    }

    public function user_contact(){
        return $this->belongsTo(user_contact::class , "shipped_address_id" , "id");
    }

    public function payment_method(){
        return $this->belongsTo(payment_method::class , "payment_method_id" , "id");
    }

    public function shoping_company_id(){
        return $this->belongsTo(shoping_company::class , "shoping_company_id" , "id");
    }
}
