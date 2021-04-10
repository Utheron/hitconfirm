<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'username' => 'Superadmin',
                'avatar' => 'img/avatars/street-fighter__guile.jpg',
                'header' => 'https://place-hold.it/400x110',
                'email' => 'superadmin@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(16)
            ],
            [
                'role_id' => 2,
                'username' => 'Admin',
                'avatar' => 'img/avatars/street-fighter__guile.jpg',
                'header' => 'https://place-hold.it/400x110',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(16)
            ],
            [
                'role_id' => 3,
                'username' => 'Member',
                'avatar' => 'img/avatars/street-fighter__guile.jpg',
                'header' => 'https://place-hold.it/400x110',
                'email' => 'member@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(16)
            ],
        ]);

        factory(User::class, 7)->create();
    }
}
