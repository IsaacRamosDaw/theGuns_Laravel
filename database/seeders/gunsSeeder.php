<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class gunsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("guns")->insert([
            ['name' => 'AK-47', 'type'=> 'Automatic', 'country'=> 'Russia', 'ammo' => '7.76'],
            ['name' => 'Dragunov', 'type'=> 'Sniper Rifle', 'country'=> 'Russia', 'ammo' => '7.62'],
            ['name' => 'M1911', 'type'=> 'Pistol', 'country'=> 'USA', 'ammo' => '.45 ACP'],
            ['name' => 'Glock 17', 'type'=> 'Pistol', 'country'=> 'Austria', 'ammo' => '9mm'],
            ['name' => 'Uzi', 'type'=> 'Submachine Gun', 'country'=> 'Israel', 'ammo' => '9mm']
        ]);
    }
}
