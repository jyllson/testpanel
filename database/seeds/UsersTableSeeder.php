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
                'password'       => '$2y$10$Z9UGpnOC06EeJoL.HP.1oO00Z0l.0ShGYWpUvhzHb8ZH9VOnN/K3q',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
