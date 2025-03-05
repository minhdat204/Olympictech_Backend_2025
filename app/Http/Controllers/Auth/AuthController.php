<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Attributes\Before;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class AuthController extends Controller
{
    public function register(RegisterRequest $res){

       $data = [
            'username'=>$res->username,
            'email'=>$res->email,
            'password'=>$res->password,
            'role'=>$res->role,
       ];

        $user =  User::register($data);
        try {
            return response()->json([
                'sts' => true,
                'msg' => 'Đăng ký tài khoản thành công!',
                'data'=> $user
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'sts' => false,
                'message' => 'Đăng ký thất bại, vui lòng thử lại sau!',
                'err'   => $e->getMessage()
            ], 500);
        }
    }
        public function login(LoginRequest $request)
        {
            // Lấy thông tin đăng nhập từ request
            $credentials = $request->only('email', 'password');

            try {
                // Thử tạo token từ thông tin đăng nhập
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json([
                        'sts' => false,
                        'msg' => 'Thông tin đăng nhập không chính xác'
                    ], 401);
                }
            } catch (JWTException $e) {
                return response()->json([
                    'sts'   => false,
                    'msg'   => 'Không thể tạo token',
                    'error' => $e->getMessage()
                ], 500);
            }

            return response()->json([
                'sts'=> true,
                'msg'=> 'Đăng nhập thành công',
                'access_token'=> $token,
                'token_type' => 'Bearer'
            ], 200);
        }
    public function user(Request $res){
        return $res->user();
    }
    public function logout(){
        try {
            JWTAuth::invalidate(JWTAuth::getToken());

            return response()->json([
                'sts' => true,
                'msg' => 'Đăng xuất thành công'
            ], 200);
        } catch (JWTException $e) {
            return response()->json([
                'sts'   => false,
                'msg'   => 'Đăng xuất thất bại',
                'error' => $e->getMessage()
            ], 500);
        }
    }

}