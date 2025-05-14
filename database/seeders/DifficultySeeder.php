<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Difficulty;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $difficulties = ["easy", "medium", "hard", "expert", "master", "extreme"];
        foreach ($difficulties as $difficulty) {
            Difficulty::create([
                'name' => $difficulty,
            ]);
        }
    }
}
