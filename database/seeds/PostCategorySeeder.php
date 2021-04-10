<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_categories')->insert([
            [
                'slug' => 'news',
                'name' => 'News',
            ],
            [
                'slug' => 'ranking',
                'name' => 'Ranking',
            ],
            [
                'slug' => 'event',
                'name' => 'Event',
            ],
            [
                'slug' => 'tournament',
                'name' => 'Tournament',
            ],
            [
                'slug' => 'online',
                'name' => 'Online',
            ],
        ]);
    }
}
