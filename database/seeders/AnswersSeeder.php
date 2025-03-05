<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Answer;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Answer::create([
            'is_correct' => 1,
            'contestant_id' => 1, // Nguyễn Văn A
            'question_id' => 1, // Câu hỏi 1
        ]);

        Answer::create([
            'is_correct' => 0,
            'contestant_id' => 2, // Trần Thị B
            'question_id' => 1,
        ]);

        Answer::create([
            'is_correct' => 1,
            'contestant_id' => 3, // Lê Văn C
            'question_id' => 1,
        ]);

        Answer::create([
            'is_correct' => 0,
            'contestant_id' => 4, // Phạm Thị D
            'question_id' => 1,
        ]);
    }
}
