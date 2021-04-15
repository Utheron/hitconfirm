<?php

use App\Models\GamePlatform;
use Illuminate\Database\Seeder;

class GamePlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_platform')->insert([
            [
                'game_id' => 1,
                'platform_id' => 9,
            ],
            [
                'game_id' => 1,
                'platform_id' => 5,
            ],
            [
                'game_id' => 1,
                'platform_id' => 1,
            ],
            [
                'game_id' => 2,
                'platform_id' => 7,
            ],
            [
                'game_id' => 2,
                'platform_id' => 4,
            ],
            [
                'game_id' => 2,
                'platform_id' => 1,
            ],
            [
                'game_id' => 3,
                'platform_id' => 9,
            ],
            [
                'game_id' => 3,
                'platform_id' => 5,
            ],
            [
                'game_id' => 4,
                'platform_id' => 1,
            ],
            [
                'game_id' => 4,
                'platform_id' => 7,
            ],
            [
                'game_id' => 5,
                'platform_id' => 4,
            ],
            [
                'game_id' => 5,
                'platform_id' => 1,
            ],
            [
                'game_id' => 6,
                'platform_id' => 9,
            ],
            [
                'game_id' => 6,
                'platform_id' => 5,
            ],
            [
                'game_id' => 7,
                'platform_id' => 1,
            ],
            [
                'game_id' => 7,
                'platform_id' => 7,
            ],
            [
                'game_id' => 8,
                'platform_id' => 4,
            ],
            [
                'game_id' => 8,
                'platform_id' => 1,
            ],
        ]);
    }
}
