<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::create([
            'group_name' => 'Nhóm 1',
            'match_id' => 1, // Trận 1
            'judge_id' => 2, // judge1
        ]);

        Group::create([
            'group_name' => 'Nhóm 2',
            'match_id' => 1,
            'judge_id' => 3, // judge2
        ]);
    }
}
