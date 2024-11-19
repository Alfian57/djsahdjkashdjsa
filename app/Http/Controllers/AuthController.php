<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login', [
            'title' => "Login"
        ]);
    }

    public function authenticate(LoginRequest $request)
    {
        if ($request->email == "admin@admin.com" && $request->password == "523") {
            return "Selamat Datang";
        }

        return "Maaf anda tidak bisa masuk";
    }
}
