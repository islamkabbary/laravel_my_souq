<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;



    public function brand(){
        return $this->belongsTo(brand::class , 'brand_id' , 'id');
    }
    public function category(){
        return $this->belongsTo(category::class , 'category_id' , 'id');
    }
    public function user(){
        return $this->belongsTo(user::class , 'user_id' , 'id');
    }
    public function order_product(){
        return $this->hasMany(OrderProduct::class , 'product_id' , 'id');
    }

    public function product_image(){
        return $this->hasMany(ProductImage::class , 'product_id' , 'id');
    }
}



