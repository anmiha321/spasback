<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeopleInSearchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fio_of_responsible' => $this->faker->text,
            'phone' => $this->faker->phoneNumber,
            'fio_of_missing' => $this->faker->text,
            'birthday' => $this->faker->date,
            'day_of_missing' => $this->faker->date,
            'place_of_missing' => $this->faker->text,
            'type_of_place' => $this->faker->numberBetween($min = 1, $max = 2),
            'missing_explanation' => $this->faker->text,
            'photo_of_missing' => $this->faker->image,
            'extra_info' => $this->faker->text,
            'status' => $this->faker->numberBetween($min = 1, $max = 2),
        ];
    }
}
