<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kategorija>
 */
class KategorijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $kategorije = ['Sportska obuca', 'Lifestyle obuca', 'Casual obuca', 'Hippy obuca', 'Zimska obuca', 'Letnja obuca'];
        return [
            'naziv'=>$this->faker->randomElement($kategorije),
            'slug'=>$this->faker->word(),
            'opis'=>$this->faker->text(40),
        ];
    }
}
