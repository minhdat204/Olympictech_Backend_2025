<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
        $user = Auth::user();
        if(!$user || $user->role !== $role){
            return response()->json([
                'sts'=>false,
                'msg'=>'Vui lòng đăng nhập với vai trò '.$role,
            ],404);
        }
        return $next($request);
    }
}