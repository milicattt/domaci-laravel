<?php

namespace Database\Seeders;

use App\Models\Brend;
use App\Models\Kategorija;
use Illuminate\Database\Seeder;

class BrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brend::create([
            'imeBrenda'=>"Nike",
            'opis'=>"Nike je multinacionalna korporacija koja dizajnira,
             razvija i prodaje sportsku obuću, odeću i opremu, sa fokusom
              na inovacijama i inspiracijom da izvuče atletu u svakog.",
            'kategorija_id'=>Kategorija::all()->random()->id,
        ]);

        Brend::create([
            'imeBrenda'=>"Puma",
            'opis'=>"Puma je njemačka kompanija koja se bavi dizajniranjem,
             proizvodnjom i prodajom sportske obuće, odeće i opreme, sa fokusom
              na modi i stilu.",
            'kategorija_id'=>Kategorija::all()->random()->id,
        ]);

        Brend::create([
            'imeBrenda'=>"Balenciaga",
            'opis'=>"Balenciaga je španska modna kuća koja se bavi dizajniranjem
             i proizvodnjom luksuzne mode, obuće i aksesoara, poznata po nekonvencionalnom
              dizajnu i avangardnom stilu.",
            'kategorija_id'=>Kategorija::all()->random()->id,
        ]);

        $brend4 = Brend::factory()->create();
        $brend5 = Brend::factory()->create();

    }
}
