<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPackage extends Model
{
    protected $fillable = [
        'package_name',
    ];

    public function details()
    {
        return $this->hasMany(QuestionPackageDetail::class, 'package_id');
    }

    public function matches()
    {
        return $this->hasMany(RoundMatch::class, 'package_id');
    }
}
