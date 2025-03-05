<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/Groups.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $fillable = [
        'match_id',
        'judge_id',
        'group_name',
    ];

    /**
     * Lấy thông tin trận của nhóm
     */
    public function match()
    {
        return $this->belongsTo(RoundMatch::class, 'match_id');
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
        return $this->hasMany(Contestant::class, 'group_id');
    }
}
