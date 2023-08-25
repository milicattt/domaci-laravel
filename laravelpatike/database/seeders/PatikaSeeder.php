<?php

namespace Database\Seeders;

use App\Models\Patika;
use Illuminate\Database\Seeder;

class PatikaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Patika::factory(5)->create();
    }
}
