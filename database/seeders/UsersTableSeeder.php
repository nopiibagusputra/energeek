<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Admin', 'email' => 'admin@example.com', 'password' => bcrypt('password')],
            ['name' => 'User', 'email' => 'user@example.com', 'password' => bcrypt('password')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
