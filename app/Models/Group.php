<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'group_name',
        'match_id',
        'judge_id',
    ];

    public function match()
    {
        return $this->belongsTo(RoundMatch::class);
    }

    public function judge()
    {
        return $this->belongsTo(User::class, 'judge_id');
    }

    public function contestants()
    {
        return $this->hasMany(Contestant::class);
    }
}
