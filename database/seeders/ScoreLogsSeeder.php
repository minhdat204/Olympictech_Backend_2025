<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ScoreLog;

class ScoreLogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ScoreLog::create([
            'score' => 10,
            'updated_at' => now(),
            'contestant_id' => 1, // Nguyễn Văn A
            'match_id' => 1, // Trận 1
        ]);

        ScoreLog::create([
            'score' => 0,
            'updated_at' => now(),
            'contestant_id' => 2, // Trần Thị B
            'match_id' => 1,
        ]);

        ScoreLog::create([
            'score' => 10,
            'updated_at' => now(),
            'contestant_id' => 3, // Lê Văn C
            'match_id' => 1,
        ]);

        ScoreLog::create([
            'score' => 0,
            'updated_at' => now(),
            'contestant_id' => 4, // Phạm Thị D
            'match_id' => 1,
        ]);
    }
}
