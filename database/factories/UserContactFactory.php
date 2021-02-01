<?php

namespace Database\Factories;

use App\Models\UserContact;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserContact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "type"=>$this->faker->
            randomElement(['Address', 'Mobile', 'Phone', 'fax', 'postal', 'code']),
            "contact"=>$this->faker->sentence(),
            //"user_id"=>User::inRandomOrder()->first()->id,
        ];
    }
}
