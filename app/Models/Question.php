<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/Questions.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'question_intro',
        'question_explanation',
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
        return $this->hasMany(Answer::class, 'question_id');
    }

    /**
     * Lấy danh sách chi tiết gói câu hỏi chứa câu hỏi này
     */
    public function packageDetails()
    {
        return $this->hasMany(QuestionPackageDetail::class, 'question_id');
    }

    /**
     * Lấy danh sách gói câu hỏi chứa câu hỏi này
     */
    public function packages()
    {
        return $this->belongsToMany(QuestionPackage::class, 'question_package_details', 'question_id', 'package_id')
            ->withPivot('question_order');
    }
}
