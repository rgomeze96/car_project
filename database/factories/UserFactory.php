<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'user' => $this->faker->userName,
            'password' => $this->faker->password,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address, 
            //'remember_token' => Str::random(10),
            'age' => $this->faker->numberBetween($min = 18, $max = 100),
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'telephone' => $this->faker->e164PhoneNumber,
            'balance' => $this -> faker -> numberBetween($min = 20000, $max = 1000000)
        ];
    }
}
