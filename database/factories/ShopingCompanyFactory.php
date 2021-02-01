<?php

namespace Database\Factories;

use App\Models\ShopingCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopingCompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShopingCompany::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->company(),
            "fees"=>$this->faker->randomElement([25,50,75,100]),
            "estimated_shipping_durcation"=>
            $this->faker->randomNumber(),
        ];
    }
}
