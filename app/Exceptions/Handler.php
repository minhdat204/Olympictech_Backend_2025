<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Các trường sẽ không bị flash vào session khi lỗi validation xảy ra.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Đăng ký các callback xử lý ngoại lệ.
     */
    public function register(): void
    {
        $this->renderable(function (AuthorizationException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'code' => 403,
                    'error' => "Bạn không có quyền thực hiện hành động này."
                ], 403);
            }
        });


        $this->renderable(function (AuthenticationException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'code' => 401,
                    'error' => "Bạn cần đăng nhập để tiếp tục."
                ], 401);
            }
        });


        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'code' => 404,
                    'error' => "Không tìm thấy tài nguyên hoặc đường dẫn không hợp lệ."
                ], 404);
            }
        });


        $this->renderable(function (ValidationException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'code' => 422,
                    'error' => "Dữ liệu không hợp lệ.",
                    'messages' => $e->errors(),
                ], 422);
            }
        });
    }
}
