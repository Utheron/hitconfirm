<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'superadmin',
                'permissions' => '[]'
            ],
            [
                'name' => 'admin',
                'permissions' => '[]'
            ],
            [
                'name' => 'moderator',
                'permissions' => '[]'
            ],
            [
                'name' => 'member',
                'permissions' => '[]'
            ]
        ]);
    }
}
