<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Brend;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patika>
 */
class PatikaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brend_id'=>Brend::factory(),
            'user_id'=>User::factory(),
            'ime'=>$this->faker->unique()->word . ' ' . $this->faker->unique()->word,
            'url_slike'=>$this->faker->imageUrl(300, 300, 'sneakers', true, 'Faker'),
            'opis'=>$this->faker->text(70),
            'cena'=>$this->faker->numerify(),
        ];
    }
}
