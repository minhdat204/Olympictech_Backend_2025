<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoundMatch;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoundMatch::create([
            'match_name' => 'Trận 1 Tứ kết',
            'start_time' => now(),
            'end_time' => now()->addHours(2),
            'status' => 'chưa bắt đầu',
            'current_question_id' => null,
            'gold_winner_id' => null,
            'current_question_status' => 'chưa hiển thị',
            'completed_questions' => 0,
            'round_id' => 1,
            'package_id' => 1,
        ]);

        RoundMatch::create([
            'match_name' => 'Trận 2 Tứ kết',
            'start_time' => now()->addHours(3),
            'end_time' => now()->addHours(5),
            'status' => 'chưa bắt đầu',
            'current_question_id' => null,
            'gold_winner_id' => null,
            'current_question_status' => 'chưa hiển thị',
            'completed_questions' => 0,
            'round_id' => 1,
            'package_id' => 1,
        ]);
    }
}
