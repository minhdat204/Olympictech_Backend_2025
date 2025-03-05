<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/ScoreLogs.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreLog extends Model
{
    use HasFactory;

    protected $table = 'score_logs';

    protected $fillable = [
        'contestant_id',
        'match_id',
        'score',
    ];

    // Chỉ có updated_at, không có created_at
    const CREATED_AT = null;

    /**
     * Lấy thông tin thí sinh
     */
    public function contestant()
    {
        return $this->belongsTo(Contestant::class, 'contestant_id');
    }

    /**
     * Lấy thông tin trận
     */
    public function match()
    {
        return $this->belongsTo(RoundMatch::class, 'match_id');
    }
}
