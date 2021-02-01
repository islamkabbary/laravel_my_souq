<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopingCompany extends Model
{
    use HasFactory;



    public function order(){
        return $this->hasMany(Order::class , 'shoping_company_id' , 'id');
    }
}
