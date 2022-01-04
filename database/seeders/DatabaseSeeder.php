<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'username' => 'splenticz',
            'fullname' => 'Kelvin',
            'password' => Hash::make('kelvinchenchen'),
            'role' => '1',
            'level' => '7'
        ]);
        User::create([
            'username' => 'walnut',
            'fullname' => 'Candi',
            'password' => Hash::make('walnutwalnut'),
            'role' => '1',
            'level' => '5'
        ]);
        User::create([
            'username' => 'stiyaaa',
            'fullname' => 'Tiya',
            'password' => Hash::make('stiyastiya'),
            'role' => '1',
            'level' => '10'
        ]);
        User::create([
            'username' => 'agent I',
            'fullname' => 'Agent',
            'password' => Hash::make('agentagent'),
            'role' => '1',
            'level' => '8'
        ]);
        User::create([
            'username' => 'cassie',
            'fullname' => 'Cassie',
            'password' => Hash::make('cassiecassie'),
            'role' => '1',
            'level' => '5'
        ]);
        User::create([
            'username' => 'jeembo',
            'fullname' => 'Jimbo',
            'password' => Hash::make('jimbojimbo12'),
            'role' => '1',
            'level' => '12'
        ]);
        User::create([
            'username' => 'mazuko',
            'fullname' => 'Mazuko',
            'password' => Hash::make('mazukomazuko'),
            'role' => '1',
            'level' => '3'
        ]);
        User::create([
            'username' => 'UrlLocalLeader',
            'fullname' => 'Sofya',
            'password' => Hash::make('urllocalleader'),
            'role' => '1',
            'level' => '15'
        ]);
        User::create([
            'username' => 'adminKL',
            'fullname' => 'Kelvin',
            'password' => Hash::make('adminkelvin'),
            'role' => '2',
            'level' => '0'
        ]);
    }
}
