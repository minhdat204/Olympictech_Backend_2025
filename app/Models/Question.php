<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question_text',
        'question_intro',
        'question_topic',
        'question_explanation',
        'question_type',
        'media_url',
        'correct_answer',
        'options',
        'difficulty',
        'gold_winner_id',
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function packageDetails()
    {
        return $this->hasMany(QuestionPackageDetail::class);
    }
}
