<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'question_text' => '1 + 1 bằng bao nhiêu?',
            'question_intro' => 'Câu hỏi cơ bản về toán học',
            'question_topic' => 'Alpha',
            'question_explanation' => 'Cộng hai số nguyên đơn giản',
            'question_type' => 'trắc nghiệm',
            'media_url' => null,
            'correct_answer' => '2',
            'options' => json_encode(['1', '2', '3', '4']),
            'difficulty' => 'dễ',
            'gold_winner_id' => 0,
        ]);

        Question::create([
            'question_text' => 'Điền từ còn thiếu: "Hello ___"',
            'question_intro' => 'Kiểm tra khả năng ngôn ngữ',
            'question_topic' => 'Beta',
            'question_explanation' => 'Câu chào cơ bản trong tiếng Anh',
            'question_type' => 'điền chữ',
            'media_url' => null,
            'correct_answer' => 'World',
            'options' => json_encode([]),
            'difficulty' => 'trung bình',
            'gold_winner_id' => 0,
        ]);

        Question::create([
            'question_text' => 'Viết thuật toán in dãy Fibonacci',
            'question_intro' => 'Kiểm tra kỹ năng lập trình',
            'question_topic' => 'RC',
            'question_explanation' => 'Dãy số Fibonacci: 0, 1, 1, 2, 3, 5,...',
            'question_type' => 'tự luận',
            'media_url' => null,
            'correct_answer' => 'Code mẫu',
            'options' => json_encode([]),
            'difficulty' => 'khó',
            'gold_winner_id' => 0,
        ]);

        Question::create([
            'question_text' => 'Giải bài toán: Tìm x, 2x + 3 = 7',
            'question_intro' => 'Câu hỏi nâng cao về đại số',
            'question_topic' => 'GOLD',
            'question_explanation' => 'Giải phương trình bậc nhất',
            'question_type' => 'tự luận',
            'media_url' => null,
            'correct_answer' => 'x = 2',
            'options' => json_encode([]),
            'difficulty' => 'khó',
            'gold_winner_id' => 0,
        ]);
    }
}
