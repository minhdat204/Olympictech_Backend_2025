<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contestant;

class ContestantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contestant::create([
            'fullname' => 'Nguyễn Văn A',
            'email' => 'a@example.com',
            'shool' => 'THPT ABC',
            'class_year' => 2023,
            'registration_number' => 'REG001',
            'score' => 0,
            'status' => 'đang thi',
            'current_round_id' => 1, // Vòng loại
            'group_id' => 1, // Nhóm 1
        ]);

        Contestant::create([
            'fullname' => 'Trần Thị B',
            'email' => 'b@example.com',
            'shool' => 'THPT XYZ',
            'class_year' => 2024,
            'registration_number' => 'REG002',
            'score' => 0,
            'status' => 'đang thi',
            'current_round_id' => 1,
            'group_id' => 1,
        ]);

        Contestant::create([
            'fullname' => 'Lê Văn C',
            'email' => 'c@example.com',
            'shool' => 'THPT DEF',
            'class_year' => 2023,
            'registration_number' => 'REG003',
            'score' => 0,
            'status' => 'đang thi',
            'current_round_id' => 1,
            'group_id' => 2, // Nhóm 2
        ]);

        Contestant::create([
            'fullname' => 'Phạm Thị D',
            'email' => 'd@example.com',
            'shool' => 'THPT GHI',
            'class_year' => 2024,
            'registration_number' => 'REG004',
            'score' => 0,
            'status' => 'đang thi',
            'current_round_id' => 1,
            'group_id' => 2,
        ]);
    }
}
