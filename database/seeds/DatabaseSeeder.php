<?php

use App\Models\GamePlatform;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PageCategorySeeder::class,
            PostCategorySeeder::class,

            RoleSeeder::class,
            VenueSeeder::class,
            UserSeeder::class,
            PageSeeder::class,
            PostSeeder::class,
            GameSeeder::class,
            
            PlatformSeeder::class,
            GamePlatformSeeder::class,
        ]);
    }
}
