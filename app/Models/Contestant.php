<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/Contestants.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    use HasFactory;

    protected $table = 'contestants';

    protected $fillable = [
        'current_round_id',
        'group_id',
        'fullname',
        'email',
        'school',
        'class_year',
        'registration_number',
        'score',
        'status',
    ];

    /**
     * Lấy vòng thi hiện tại của thí sinh
     */
    public function currentRound()
    {
        return $this->belongsTo(Round::class, 'current_round_id');
    }

    /**
     * Lấy nhóm của thí sinh
     */
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    /**
     * Lấy danh sách câu trả lời của thí sinh
     */
    public function answers()
    {
        return $this->hasMany(Answer::class, 'contestant_id');
    }

    /**
     * Lấy lịch sử điểm của thí sinh
     */
    public function scoreLogs()
    {
        return $this->hasMany(ScoreLog::class, 'contestant_id');
    }
}
