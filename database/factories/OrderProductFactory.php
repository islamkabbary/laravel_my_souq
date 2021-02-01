<?php

namespace Database\Factories;

use App\Models\OrderProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "unit_price"=>$this->faker->randomDigit(),
            "review"=>$this->faker->randomNumber(),
            // "product_id"=>Product::inRandomOrder()->first()->id,
            // "order_id"=>Order::inRandomOrder()->first()->id,
        ];
    }
}
