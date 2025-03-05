<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Round;

class RoundsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Round::create([
            'round_name' => 'Vòng loại',
            'description' => 'Vòng thi đầu tiên để chọn thí sinh xuất sắc',
            'start_time' => now(),
            'end_time' => now()->addDay(),
        ]);

        Round::create([
            'round_name' => 'Tứ kết',
            'description' => 'Vòng thi giữa các thí sinh vượt qua vòng loại',
            'start_time' => now()->addDays(2),
            'end_time' => now()->addDays(3),
        ]);

        Round::create([
            'round_name' => 'Bán kết',
            'description' => 'Vòng thi chọn ra top thí sinh mạnh nhất',
            'start_time' => now()->addDays(4),
            'end_time' => now()->addDays(5),
        ]);

        Round::create([
            'round_name' => 'Chung kết',
            'description' => 'Vòng thi cuối cùng để tìm ra nhà vô địch',
            'start_time' => now()->addDays(6),
            'end_time' => now()->addDays(7),
        ]);
    }
}
