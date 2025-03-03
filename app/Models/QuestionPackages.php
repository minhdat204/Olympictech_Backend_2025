<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/QuestionPackages.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPackages extends Model
{
    use HasFactory;

    protected $fillable = [
        'round_id',
        'package_name',
    ];

    /**
     * Lấy thông tin vòng thi của gói câu hỏi
     */
    public function round()
    {
        return $this->belongsTo(Rounds::class, 'round_id');
    }

    /**
     * Lấy chi tiết của gói câu hỏi
     */
    public function details()
    {
        return $this->hasMany(QuestionPackageDetails::class, 'package_id');
    }

    /**
     * Lấy danh sách câu hỏi trong gói
     */
    public function questions()
    {
        return $this->belongsToMany(Questions::class, 'question_package_details', 'package_id', 'question_id')
            ->withPivot('question_order')
            ->orderBy('question_order');
    }
}
