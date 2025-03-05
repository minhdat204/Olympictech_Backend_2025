<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoSubmission extends Model
{
    protected $fillable = [
        'team_name',
        'video_url',
        'submitted_at',
        'round_id',
    ];

    public function round()
    {
        return $this->belongsTo(Round::class);
    }
}
