<?php

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'user_id' => 1,
                'category_id' => 1,
                'slug' => 'voluptate-doloremque',
                'header' => 'https://place-hold.it/1280x720',
                'name' => 'Voluptates praesentium autem.',
                'content' => 'Reprehenderit harum officiis voluptatem. Suscipit et optio in vel nihil modi.'
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'slug' => 'eius-deleniti',
                'header' => 'https://place-hold.it/1280x720',
                'name' => 'Similique illum est minima.',
                'content' => 'Ut qui quis et excepturi. Officia quas nihil consequatur.'
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'slug' => 'eius',
                'header' => 'https://place-hold.it/1280x720',
                'name' => 'Voluptatem laboriosam enim.',
                'content' => 'Inventore sit voluptates et est pariatur ipsum ea. Sed sequi voluptates quo corporis.'
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'slug' => 'rerum',
                'header' => 'https://place-hold.it/1280x720',
                'name' => 'Explicabo et nam.',
                'content' => 'Eligendi aliquam quia omnis autem. Error reprehenderit asperiores cumque nostrum.'
            ]
        ]);
    }
}
