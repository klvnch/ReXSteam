<?php

namespace Database\Seeders;

use App\Models\GameCategory;
use Illuminate\Database\Seeder;

class GameCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        GameCategory::create([
            'category' => 'Battle Royale'
        ]);
        GameCategory::create([
            'category' => 'Simulation'
        ]);
        GameCategory::create([
            'category' => 'Racing'
        ]);
        GameCategory::create([
            'category' => 'Adventure'
        ]);
        GameCategory::create([
            'category' => 'Action'
        ]);
        GameCategory::create([
            'category' => 'Survival'
        ]);
        GameCategory::create([
            'category' => 'FPS'
        ]);
    }
}
