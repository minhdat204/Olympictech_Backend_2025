<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Xác định người dùng có quyền gửi request này không.
     */
    public function authorize(): bool
    {
        return true; // Đổi thành false nếu không cho phép
    }

    /**
     * Quy tắc kiểm tra dữ liệu đầu vào.
     */
    public function rules(): array
    {
        return [
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'role' => 'required',
        ];
    }

    /**
     * Thông báo lỗi tùy chỉnh.
     */
    public function messages(): array
    {
        return [
            'username.required' => 'Vui lòng nhập tên người dùng.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không đúng định dạng.',
            'email.unique' => 'Email này đã được đăng ký.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
            'role.required' => 'Vui lòng chọn vai trò.',
        ];
    }
}