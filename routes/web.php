<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestController;
use App\Models\Buku;
use App\Models\Penerbit;
use App\Models\Penulis;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::get("/login", [AuthController::class, 'login']);
Route::post("/login", [AuthController::class, 'authenticate']);

Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'store']);

Route::get("/create", [TestController::class, 'create']);
Route::post("/simpan", [TestController::class, 'simpan']);

Route::get("/create2", [TestController::class, 'createDua']);
Route::post("/simpan2", [TestController::class, 'simpanDua']);

Route::get("contoh", function () {
    return view('pages.cth-content', [
        'nim' => "5230411121",
        "nama" => "Alfian Gading Saputra",
        "status" => "Mahasiswa",
        "matakuliah" => [
            "Matematika",
            "Fisika",
            "Kimia",
        ]
    ]);
});

Route::get("challenge1", function () {
    return view("pages.challenge1", [
        'title' => "Satu",
        "mahasiswa" => [
            [
                "npm" => "5230411121",
                "nama" => "Alfian",
                "matakuliah" => [
                    "Matematika",
                    "KImia",
                ],
                'status_mahasiswa' => true,
            ],
            [
                "npm" => "5230411122",
                "nama" => "Gading",
                "matakuliah" => [
                    "Fisika",
                    "KImia",
                ],
                'status_mahasiswa' => false
            ]
        ]
    ]);
});

Route::get("chanllenge2", function () {
    return view("pages.challenge2", [
        'title' => "DUa",
        "mahasiswa" => [
            [
                "npm" => "5230411121",
                "nama" => "Alfian",
                "matakuliah" => [
                    "Matematika",
                    "KImia",
                ],
                'status_mahasiswa' => true
            ],
            [
                "npm" => "5230411122",
                "nama" => "Gading",
                "matakuliah" => [
                    "Fisika",
                    "KImia",
                ],
                'status_mahasiswa' => false
            ]
        ]
    ]);
});

Route::get("challenge3", function () {
    return view('pages.challenge3', [
        "title" => "Tes",
        "namaprodi" => [
            "Informatika",
            "Elektro",
            "Industri"
        ]
    ]);
});

Route::get('buku', function () {
    return view('pages.buku', [
        'buku' => Buku::all()
    ]);
});

Route::get('penulis/{penulis}', function (Penulis $penulis) {

    return view('pages.penulis', [
        'penulis' => $penulis,
    ]);
});

Route::get('penerbit/{penerbit}', function (Penerbit $penerbit) {
    return view('pages.penerbit', [
        'penerbit' => $penerbit,
    ]);
});
