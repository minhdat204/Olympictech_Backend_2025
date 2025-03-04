<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/Answers.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;

    protected $fillable = [
        'contestant_id',
        'question_id',
        'given_answer',
        'is_correct',
        'answered_at',
    ];

    protected $casts = [
        'is_correct' => 'boolean',
        'answered_at' => 'datetime',
    ];

    // Tắt timestamps mặc định
    public $timestamps = false;

    /**
     * Lấy thông tin thí sinh
     */
    public function contestant()
    {
        return $this->belongsTo(Contestants::class, 'contestant_id');
    }

    /**
     * Lấy thông tin câu hỏi
     */
    public function question()
    {
        return $this->belongsTo(Questions::class, 'question_id');
    }
}
