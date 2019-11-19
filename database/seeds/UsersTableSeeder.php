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
                'password'       => '$2y$10$S1Gc5aukVj0POf8LzIHje.1M2MVZO4mgwjztG2WyhhfKIas6cgUNm',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
