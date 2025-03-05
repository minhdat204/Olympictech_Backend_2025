<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/QuestionPackageDetails.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPackageDetail extends Model
{
    use HasFactory;

    protected $table = 'question_package_details';

    protected $fillable = [
        'package_id',
        'question_id',
        'question_order',
    ];

    // Tắt timestamps mặc định vì đây là bảng pivot
    public $timestamps = false;

    /**
     * Lấy thông tin gói câu hỏi
     */
    public function package()
    {
        return $this->belongsTo(QuestionPackage::class, 'package_id');
    }

    /**
     * Lấy thông tin câu hỏi
     */
    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
