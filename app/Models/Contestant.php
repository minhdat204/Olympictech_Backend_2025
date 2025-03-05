<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    protected $fillable = [
        'fullname',
        'email',
        'shool',
        'class_year',
        'registration_number',
        'score',
        'status',
        'current_round_id',
        'group_id',
    ];

    public function currentRound()
    {
        return $this->belongsTo(Round::class, 'current_round_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function scoreLogs()
    {
        return $this->hasMany(ScoreLog::class);
    }
}
