<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/Rounds.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    use HasFactory;

    protected $table = 'rounds';

    protected $fillable = [
        'round_name',
        'description',
        'start_time',
        'end_time',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    /**
     * Lấy danh sách thí sinh trong vòng thi này
     */
    public function contestants()
    {
        return $this->hasMany(Contestant::class, 'current_round_id');
    }

    /**
     * Lấy danh sách nhóm trong vòng thi
     */
    public function groups()
    {
        return $this->hasMany(Group::class, 'round_id');
    }

    /**
     * Lấy danh sách gói câu hỏi trong vòng thi
     */
    public function questionPackages()
    {
        return $this->hasMany(QuestionPackage::class, 'round_id');
    }

    /**
     * Lấy danh sách lịch sử điểm trong vòng thi
     */
    public function scoreLogs()
    {
        return $this->hasMany(ScoreLog::class, 'round_id');
    }

    /**
     * Lấy danh sách bài nộp video trong vòng thi
     */
    public function videoSubmissions()
    {
        return $this->hasMany(VideoSubmission::class, 'round_id');
    }
}
