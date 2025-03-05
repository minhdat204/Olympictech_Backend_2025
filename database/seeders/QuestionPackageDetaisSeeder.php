<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuestionPackageDetail;

class QuestionPackageDetaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuestionPackageDetail::create([
            'question_order' => 1,
            'package_id' => 1, // Gói Vòng loại
            'question_id' => 1, // Câu hỏi 1
        ]);

        QuestionPackageDetail::create([
            'question_order' => 2,
            'package_id' => 1,
            'question_id' => 2, // Câu hỏi 2
        ]);

        QuestionPackageDetail::create([
            'question_order' => 1,
            'package_id' => 2, // Gói Tứ kết
            'question_id' => 3, // Câu hỏi 3
        ]);

        QuestionPackageDetail::create([
            'question_order' => 1,
            'package_id' => 3, // Gói Bán kết
            'question_id' => 4, // Câu hỏi 4
        ]);
    }
}
