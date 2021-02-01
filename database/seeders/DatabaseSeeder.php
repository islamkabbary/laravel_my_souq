<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ShopingCompany;
use App\Models\User;
use App\Models\UserContact;
use Database\Factories\PaymentMethodFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(20)->create();
        UserContact::factory(20)->create();
        ShopingCompany::factory(20)->create();
        ProductImage::factory(20)->create();
        Product::factory(20)->create();
        PaymentMethod::factory(20)->create();
        OrderProduct::factory(20)->create();
        Order::factory(20)->create();
        Category::factory(20)->create();
        Brand::factory(20)->create();
    }
}
