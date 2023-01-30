<?php

namespace Database\Factories;

use App\Models\Dobavljac;
use App\Models\Kategorija;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProizvodFactory extends Factory
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
            'opis' => $this->faker->sentence($nbWords = 10, $variableNbWords = true),
            'cena' =>  $this->faker->numberBetween($min = 3000, $max = 9000),
            'kolicina' =>   $this->faker->numberBetween($min = 0, $max = 100),
            'kategorija_id' =>  $this->faker->numberBetween($min = 1, $max = Kategorija::count())   ,
            'nabavna_cena' => $this->faker->numberBetween($min = 1000, $max = 3000),
            'dobavljac_id' =>  $this->faker->numberBetween($min = 1, $max = Dobavljac::count())   ,

        ];
    }
}
