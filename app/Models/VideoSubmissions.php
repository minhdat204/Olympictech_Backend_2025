<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/VideoSubmissions.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoSubmissions extends Model
{
    use HasFactory;

    protected $fillable = [
        'round_id',
        'team_name',
        'video_url',
        'submitted_at',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
    ];

    // Tắt timestamps mặc định, sử dụng submitted_at thay thế
    public $timestamps = false;

    /**
     * Lấy thông tin vòng thi của bài nộp video
     */
    public function round()
    {
        return $this->belongsTo(Rounds::class, 'round_id');
    }
}
