<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuestionPackage;

class QuestionPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuestionPackage::create([
            'package_name' => 'Gói câu hỏi Vòng loại',
        ]);

        QuestionPackage::create([
            'package_name' => 'Gói câu hỏi Tứ kết',
        ]);

        QuestionPackage::create([
            'package_name' => 'Gói câu hỏi Bán kết',
        ]);

        QuestionPackage::create([
            'package_name' => 'Gói câu hỏi Chung kết',
        ]);
    }
}
