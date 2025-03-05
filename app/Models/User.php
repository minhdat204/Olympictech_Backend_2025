<?php
// filepath: /c:/Laravel/OlympicTech_Backend_2025/app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject; // Nhúng JWTSubject

class User extends Authenticatable implements JWTSubject // Thêm implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

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
     * Lấy identifier cho JWT (thường là primary key của user).
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Lấy các custom claims cho JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * Lấy các nhóm mà người dùng làm giám khảo.
     */
    public function judgedGroups()
    {
        return $this->hasMany(Groups::class, 'judge_id');
    }

    /**
     * Đăng ký người dùng mới.
     *
     * @param array $arr
     * @return \App\Models\User
     */
    public static function register(array $arr)
    {
        return User::create([
            'username' => $arr['username'],
            'email'    => $arr['email'],
            'password' => Hash::make($arr['password']),
            'role'     => $arr['role'],
        ]);
    }
}