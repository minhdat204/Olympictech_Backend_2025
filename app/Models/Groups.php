<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/Groups.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;

    protected $fillable = [
        'round_id',
        'judge_id',
        'group_name',
    ];

    /**
     * Lấy thông tin vòng thi của nhóm
     */
    public function round()
    {
        return $this->belongsTo(Rounds::class, 'round_id');
    }

    /**
     * Lấy thông tin giám khảo phụ trách nhóm
     */
    public function judge()
    {
        return $this->belongsTo(User::class, 'judge_id');
    }

    /**
     * Lấy danh sách thí sinh trong nhóm
     */
    public function contestants()
    {
        return $this->hasMany(Contestants::class, 'group_id');
    }
}
