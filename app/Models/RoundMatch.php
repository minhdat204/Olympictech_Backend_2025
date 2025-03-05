<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoundMatch extends Model
{
    use HasFactory;

    protected $table = 'matches';

    protected $fillable = [
        'pakage_id',
        'match_name',
        'status',
        'start_time',
        'end_time',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function round()
    {
        return $this->belongsTo(Round::class, 'round_id');
    }

    public function groups()
    {
        return $this->hasMany(Group::class, 'match_id');
    }

    public function questionPackages()
    {
        return $this->belongsTo(QuestionPackage::class, 'match_id');
    }

    public function scoreLogs()
    {
        return $this->hasMany(ScoreLog::class, 'match_id');
    }
}
