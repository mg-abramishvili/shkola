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
                'name'           => 'Shkola',
                'email'          => 'shkola@shkola',
                'password'       => '$2y$10$qBDXLtZr5/QqonC5kW4vYe8kI5eGuBJz8ZOVMvahIQg4cdyXjidRG',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
