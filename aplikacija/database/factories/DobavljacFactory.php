<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DobavljacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->word(),
            'adresu' => $this->faker->streetAddress(),
            'kontakt' =>  $this->faker->phoneNumber(),
       

        ];
    }
}
