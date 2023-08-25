<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\KategorijaSeeder;
use Database\Seeders\BrendSeeder;
use Database\Seeders\PatikaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KategorijaSeeder::class);
        $this->call(BrendSeeder::class);
       

        $this->call(PatikaSeeder::class);
    }
}
