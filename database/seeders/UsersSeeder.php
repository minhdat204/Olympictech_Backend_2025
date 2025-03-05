<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        User::create([
            'username' => 'judge1',
            'email' => 'judge1@example.com',
            'password' => Hash::make('password123'),
            'role' => 'judge',
        ]);

        User::create([
            'username' => 'judge2',
            'email' => 'judge2@example.com',
            'password' => Hash::make('password123'),
            'role' => 'judge',
        ]);
    }
}
