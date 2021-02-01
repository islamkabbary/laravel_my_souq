<?php

namespace Database\Factories;

use App\Models\Order;
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
            // "user_id"=>User::inRandomeOrder()->first()->id,
            //  "payment_method_id"=>Payment_Method::inRandomOrder()->first()->id,
            //  "shoping_company_id"=>Shoping_Company::inRandomOrder()->first()->id,
            //  "shipped_address_id"=>User_Contact::inRandomOrder()->first()->id,
        ];
    }
}
