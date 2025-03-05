<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPackageDetail extends Model
{
    protected $fillable = [
        'question_order',
        'package_id',
        'question_id',
    ];

    public function package()
    {
        return $this->belongsTo(QuestionPackage::class, 'package_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
