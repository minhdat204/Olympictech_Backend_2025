<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/ScoreLogs.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreLogs extends Model
{
    use HasFactory;

    protected $table = 'scoreLogs';

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
        return $this->belongsTo(Contestants::class, 'contestant_id');
    }

    /**
     * Lấy thông tin trận
     */
    public function match()
    {
        return $this->belongsTo(Matches::class, 'match_id');
    }
}
