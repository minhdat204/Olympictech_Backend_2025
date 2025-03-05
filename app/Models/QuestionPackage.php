<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/QuestionPackages.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPackage extends Model
{
    use HasFactory;

    protected $table = 'question_packages';

    protected $fillable = [
        'package_name',
    ];

    /**
     * Lấy thông tin trận của gói câu hỏi
     */
    public function match()
    {
        return $this->hasOne(RoundMatch::class, 'match_id');
    }

    /**
     * Lấy chi tiết của gói câu hỏi
     */
    public function details()
    {
        return $this->hasMany(QuestionPackageDetail::class, 'package_id');
    }

    /**
     * Lấy danh sách câu hỏi trong gói
     */
    public function questions()
    {
        return $this->belongsToMany(Question::class, 'question_package_details', 'package_id', 'question_id')
            ->withPivot('question_order')
            ->orderBy('question_order');
    }
}
