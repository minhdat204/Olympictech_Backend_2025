<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'is_correct',
        'contestant_id',
        'question_id',
    ];

    public function contestant()
    {
        return $this->belongsTo(Contestant::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
