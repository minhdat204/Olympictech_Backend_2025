<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreLog extends Model
{
    protected $fillable = [
        'score',
        'updated_at',
        'contestant_id',
        'match_id',
    ];

    public function contestant()
    {
        return $this->belongsTo(Contestant::class);
    }

    public function match()
    {
        return $this->belongsTo(RoundMatch::class);
    }
}
