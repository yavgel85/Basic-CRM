<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$Z7Gy36ZpDePiaAJHzAm0LeqJDS/0ceL8/ZJlMKb3fAEyoZIrKGM3G',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
