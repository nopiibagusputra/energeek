<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jobs;
use App\Models\User;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        
        $jobs = [
            ['name' => 'Software Engineer', 'created_by' => $user->id],
            ['name' => 'Web Developer', 'created_by' => $user->id],
            ['name' => 'Data Analyst', 'created_by' => $user->id],
            ['name' => 'Mobile Developer', 'created_by' => $user->id],
        ];

        foreach ($jobs as $job) {
            Jobs::create($job);
        }
    }
}
