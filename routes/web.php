<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\GuruController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function() {
        return redirect('/dashboard');
    });
    Route::get('/chat', [App\Http\Controllers\admin\ChatController::class, 'index']);
    Route::get('/keuangan', [App\Http\Controllers\admin\KeuanganController::class, 'index']);
    Route::get('/pengumuman', [App\Http\Controllers\admin\PengumumanController::class, 'index']);
    Route::get('/akses', [App\Http\Controllers\admin\AksesController::class, 'index']);
    Route::get('/siswa', [App\Http\Controllers\admin\SiswaController::class, 'index']);
    Route::prefix('guru')->namespace('App\Http\Controllers\admin\GuruController')->group(function () {
        Route::get('/store', [GuruController::class, 'store']);
        Route::get('/tambah', [GuruController::class, 'tambah']);
        Route::get('/edit/{id}', [GuruController::class, 'edit']);
        Route::get('/hapus/{id}', [GuruController::class, 'hapus']);
        Route::get('/', [GuruController::class, 'index']);
    });
    
    // Route::get('/guru/store', [App\Http\Controllers\admin\GuruController::class, 'store']);
    // Route::get('/guru/tambah', [App\Http\Controllers\admin\GuruController::class, 'tambah']);
    // Route::get('/guru', [App\Http\Controllers\admin\GuruController::class, 'index']);

});

Route::get('/admin', function () { return view('admin'); })->middleware('checkRole:admin');
// Route::get('/guru', function () { return view('guru'); })->middleware(['checkRole:guru']);
// Route::get('/siswa', function () { return view('siswa'); })->middleware(['checkRole:siswa']);


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboar');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
