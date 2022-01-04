<?php

namespace Database\Seeders;

use App\Models\Games;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Games::create([
            'category_id' => 1,
            'title' => 'Apex Legends',
            'adultonly' => '2'
        ]);
        Games::create([
            'category_id' => 2,
            'title' => 'Euro Truck Simulator 2',
            'adultonly' => '2'
        ]);
        Games::create([
            'category_id' => 2,
            'title' => 'Planet Coaster',
            'adultonly' => '2'
        ]);
        Games::create([
            'category_id' => 3,
            'title' => 'Forza Horizon 4',
            'adultonly' => '2'
        ]);
        Games::create([
            'category_id' => 4,
            'title' => 'Grand Theft Auto 5',
            'adultonly' => '1'
        ]);
        Games::create([
            'category_id' => 4,
            'title' => 'GTFO',
            'adultonly' => '1'
        ]);
        Games::create([
            'category_id' => 4,
            'title' => 'It Takes Two',
            'adultonly' => '2'
        ]);
        Games::create([
            'category_id' => 4,
            'title' => 'Monster Hunter World',
            'adultonly' => '1'
        ]);
        Games::create([
            'category_id' => 4,
            'title' => 'Terraria',
            'adultonly' => '2'
        ]);
        Games::create([
            'category_id' => 5,
            'title' => 'Tekken 7',
            'adultonly' => '1'
        ]);
        Games::create([
            'category_id' => 5,
            'title' => 'TABS',
            'adultonly' => '2'
        ]);
        Games::create([
            'category_id' => 6,
            'title' => 'Valheim',
            'adultonly' => '1'
        ]);
        Games::create([
            'category_id' => 7,
            'title' => 'Rainbow Six Siege',
            'adultonly' => '1'
        ]);
    }
}
