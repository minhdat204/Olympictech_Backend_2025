<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoundMatch extends Model
{
    protected $table = 'matches';

    protected $fillable = [
        'match_name',
        'start_time',
        'end_time',
        'status',
        'current_question_id',
        'current_question_status',
        'completed_questions',
        'round_id',
        'package_id',
    ];

    public function round()
    {
        return $this->belongsTo(Round::class);
    }

    public function package()
    {
        return $this->belongsTo(QuestionPackage::class, 'package_id');
    }

    public function currentQuestion()
    {
        return $this->belongsTo(QuestionPackageDetail::class, 'current_question_id');
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    public function scoreLogs()
    {
        return $this->hasMany(ScoreLog::class);
    }
}
