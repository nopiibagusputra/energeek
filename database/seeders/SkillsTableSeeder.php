<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skills;
use App\Models\User;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        
        $skills = [
            ['name' => 'PHP', 'created_by' => $user->id],
            ['name' => 'JavaScript', 'created_by' => $user->id],
            ['name' => 'Python', 'created_by' => $user->id],
            ['name' => 'SQL', 'created_by' => $user->id],
            ['name' => 'Golang', 'created_by' => $user->id],
            ['name' => 'Node Js', 'created_by' => $user->id],
        ];

        foreach ($skills as $skill) {
            Skills::create($skill);
        }
    }
}
