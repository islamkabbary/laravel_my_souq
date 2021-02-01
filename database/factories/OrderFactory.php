<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\ShopingCompany;
use App\Models\User;
use App\Models\UserContact;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "shoping_fees" =>$this->faker->randomDigit(),
            "estimated_delivery_date"=>$this->faker->time(),
            "status"=>$this->faker->
            randomElement(['Pendding', 'Accepted', 'Rejected', 'Shipped', 'Deliverd', 'Refund']),
            "user_id"=>User::inRandomeOrder()->first()->id,
             "payment_method_id"=>PaymentMethod::inRandomOrder()->first()->id,
             "shoping_company_id"=>ShopingCompany::inRandomOrder()->first()->id,
             "shipped_address_id"=>UserContact::inRandomOrder()->first()->id,
        ];
    }
}
