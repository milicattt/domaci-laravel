<?php

namespace Database\Seeders;

use App\Models\Kategorija;
use Illuminate\Database\Seeder;

class KategorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategorija::create([
            'naziv'=>"Sportska obuca",
            'slug'=>"sport",
            'opis'=>"Ova kategorija se bavi brendovima iz oblasti sporta."
 
        ]);
        Kategorija::create([
            'naziv'=>"Lifestyle obuca",
            'slug'=>"lifestyle",
            'opis'=>"Ova kategorija se bavi brendovima iz oblasti svakodnevnog zivota."
 
        ]);
        Kategorija::create([
            'naziv'=>"Casual obuca",
            'slug'=>"casual",
            'opis'=>"Ova kategorija se bavi brendovima iz oblasti opustene i udobne obuce."
    
        ]);

        $kategorija4 = Kategorija::factory()->create();
        $kategorija5 = Kategorija::factory()->create();
    }
}
