<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kategorija;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brend>
 */
class BrendFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imeBrenda'=>$this->faker->company(),
            'opis'=>$this->faker->text(40),
            'kategorija_id'=>Kategorija::factory(),
        ];
    }
}
