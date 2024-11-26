<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Kolom email wajib diisi.',
            'email.email' => 'Email harus berupa alamat email yang valid.',
            'password.required' => 'Kolom kata sandi wajib diisi.',
            'password.min' => 'Kata sandi harus terdiri dari minimal 6 karakter.',
            'password.confirmed' => "Konfirmasi password salah"
        ];
    }
}
