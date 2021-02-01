<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "price"=>$this->faker->randomDigit(),
            "offer_price"=>$this->faker->randomDigit(),
            "qty"=>$this->faker->randomDigit(),
            "free_shipping"=>$this->faker->boolean(),
            "description"=>$this->faker->paragraph(),
        ];
    }
}
