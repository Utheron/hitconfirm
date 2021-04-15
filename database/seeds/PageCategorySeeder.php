<?php

use App\Models\PageCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_categories')->insert([
            [
                'name' => 'default',
            ]
        ]);
    }
}
