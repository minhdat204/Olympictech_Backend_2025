<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/Questions.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_text',
        'question_type',
        'media_url',
        'correct_answer',
        'options',
        'difficulty',
    ];

    protected $casts = [
        'options' => 'json',
    ];

    /**
     * Lấy danh sách câu trả lời cho câu hỏi này
     */
    public function answers()
    {
        return $this->hasMany(Answers::class, 'question_id');
    }

    /**
     * Lấy danh sách chi tiết gói câu hỏi chứa câu hỏi này
     */
    public function packageDetails()
    {
        return $this->hasMany(QuestionPackageDetails::class, 'question_id');
    }

    /**
     * Lấy danh sách gói câu hỏi chứa câu hỏi này
     */
    public function packages()
    {
        return $this->belongsToMany(QuestionPackages::class, 'question_package_details', 'question_id', 'package_id')
            ->withPivot('question_order');
    }
}
