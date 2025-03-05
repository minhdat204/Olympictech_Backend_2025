<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // First create users (including judges)
            UsersSeeder::class,

            // Create rounds (no user dependencies)
            RoundsSeeder::class,

            // Create questions (no dependencies)
            QuestionsSeeder::class,

            // Create question packages (no dependencies)
            QuestionPackagesSeeder::class,

            // Create matches (depends on rounds)
            MatchesSeeder::class,

            // Create groups (depends on matches and users/judges)
            GroupsSeeder::class,

            // Create contestants (depends on groups and rounds)
            ContestantsSeeder::class,

            // Create question package details (depends on packages and questions)
            QuestionPackageDetaisSeeder::class,

            // Create answers (depends on contestants and questions)
            AnswersSeeder::class,

            // Create score logs (depends on contestants and matches)
            ScoreLogsSeeder::class,

            // Create video submissions (depends on rounds)
            VideoSubmissionsSeeder::class,
        ]);
    }
}
