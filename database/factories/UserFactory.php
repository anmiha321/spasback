<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text,
            'surname' => $this->faker->text,
            'phone' => $this->faker->numerify('8##########'),
            'email' => $this->faker->email,
            'vk' => $this->faker->url,
            'city' => $this->faker->city,
            'walk_auto' => $this->faker->numberBetween($min = 1, $max = 2),
            'birthday' => $this->faker->date,
            'password' => $this->faker->password,
            'status' => $this->faker->numberBetween($min = 1, $max = 2),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
