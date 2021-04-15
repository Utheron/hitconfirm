<?php

use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('platforms')->insert([
            [
                'name_short' => 'CPS2',
                'name_full' => 'Capcom System II',
            ],
            [
                'name_short' => 'CPS3',
                'name_full' => 'Capcom System III',
            ],
            [
                'name_short' => 'MVS',
                'name_full' => 'Multi Video System',
            ],
            [
                'name_short' => 'PS2',
                'name_full' => 'Playstation 2',
            ],
            [
                'name_short' => 'PS3',
                'name_full' => 'Playstation 3',
            ],
            [
                'name_short' => 'PS4',
                'name_full' => 'Playstation 4',
            ],
            [
                'name_short' => 'PS5',
                'name_full' => 'Playstation 5',
            ],
            [
                'name_short' => 'X360',
                'name_full' => 'Xbox 360',
            ],
            [
                'name_short' => 'XOne',
                'name_full' => 'Xbox One',
            ],
            [
                'name_short' => 'XBS',
                'name_full' => 'Xbox Series',
            ],
            [
                'name_short' => 'PC',
                'name_full' => 'Personal Computer',
            ]
        ]);
    }
}
        