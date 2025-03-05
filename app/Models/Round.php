<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $fillable = [
        'round_name',
        'description',
        'start_time',
        'end_time',
    ];

    public function matches()
    {
        return $this->hasMany(RoundMatch::class);
    }

    public function videoSubmissions()
    {
        return $this->hasMany(VideoSubmission::class);
    }
}
