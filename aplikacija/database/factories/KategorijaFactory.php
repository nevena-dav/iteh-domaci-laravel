<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KategorijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->word(),
        ];
    }
}
