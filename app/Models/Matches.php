<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    protected $fillable = [
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
        return $this->belongsTo(Rounds::class, 'round_id');
    }

    public function groups()
    {
        return $this->hasMany(Groups::class, 'match_id');
    }

    public function questionPackages()
    {
        return $this->hasMany(QuestionPackages::class, 'match_id');
    }

    public function scoreLogs()
    {
        return $this->hasMany(ScoreLogs::class, 'match_id');
    }
}
