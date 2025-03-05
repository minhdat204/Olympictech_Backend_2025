<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VideoSubmission;

class VideoSubmissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VideoSubmission::create([
            'team_name' => 'Đội Nhóm 1',
            'video_url' => 'https://example.com/video1',
            'submitted_at' => now(),
            'round_id' => 1, // Vòng loại
        ]);

        VideoSubmission::create([
            'team_name' => 'Đội Nhóm 2',
            'video_url' => 'https://example.com/video2',
            'submitted_at' => now(),
            'round_id' => 1,
        ]);
    }
}
