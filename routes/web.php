<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestController;
use App\Models\Mobil;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', [DashboardController::class, 'index']);

Route::get("/login", [AuthController::class, 'login']);
Route::post("/login", [AuthController::class, 'authenticate']);

Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'store']);

Route::get("/create", [TestController::class, 'create']);
Route::post("/simpan", [TestController::class, 'simpan']);

Route::get("/create2", [TestController::class, 'createDua']);
Route::post("/simpan2", [TestController::class, 'simpanDua']);

Route::view('test-upload', 'pages.test-upload', [
    'photos' => Photo::all()
]);
Route::post('save-upload', function (Request $request) {
    Photo::create([
        'nama' => $request->file('photo')->store('/', 'public')
    ]);
    return redirect('/test-upload');
});
Route::get('delete/photo/{id}', function ($id) {
    $photo = Photo::find($id);
    Storage::disk('public')->delete($photo->nama);
    $photo->delete();
    return redirect('/test-upload');
});

Route::view('mobil', 'pages.mobil-upload', [
    'mobil' => Mobil::all()
]);
Route::post('save-mobil', function (Request $request) {
    Mobil::create([
        'nama' => $request->nama,
        'foto' => $request->file('foto')->store('/', 'public')
    ]);
    return redirect('/mobil');
});
Route::get('delete/mobil/{id}', function ($id) {
    $mobil = Mobil::find($id);
    Storage::disk('public')->delete($mobil->foto);
    $mobil->delete();
    return redirect('/mobil');
});
