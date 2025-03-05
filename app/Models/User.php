<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * Các trường có thể gán hàng loạt (Mass Assignment)
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
    ];

    /**
     * Các trường cần ẩn khi JSON hóa dữ liệu (Hidden Attributes)
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Các kiểu dữ liệu cần chuyển đổi (Casts)
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Lấy các nhóm mà người dùng làm giám khảo
     */
    public function judgedGroups()
    {
        return $this->hasMany(Group::class, 'judge_id');
    }
}
