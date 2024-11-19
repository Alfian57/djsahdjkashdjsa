<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create()
    {
        return view('pages.create');
    }

    public function simpan(Request $request)
    {
        $data = $request->only(['nama', 'email', 'password']);

        Pengguna::create($data);
        return "Berhasil ditambahkan";
    }

    public function createDua()
    {
        return view('pages.create2');
    }

    public function simpanDua(Request $request)
    {
        $data = $request->only(['nama', 'email', 'alamat']);

        Penerbit::create($data);
        return "Berhasil ditambahkan";
    }
}
