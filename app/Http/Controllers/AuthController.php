<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

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
        $request->validated();
        return "Berhasil";
    }

    public function register()
    {
        return view('pages.register', [
            'title' => "Register"
        ]);
    }

    public function store(RegisterRequest $request)
    {
        $request->validated();
        return "Berhasil";
    }
}
