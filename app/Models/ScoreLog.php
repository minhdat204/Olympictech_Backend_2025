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

    public $timestamps = true;

    const CREATED_AT = null;

    protected $casts = [
        'updated_at' => 'datetime',
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
