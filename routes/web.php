<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\GuruController;
use App\Http\Controllers\admin\SiswaController;
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
    Route::prefix('siswa')->namespace('App\Http\Controllers\admin\SiswaController')->group(function () {
        Route::post('/store', [SiswaController::class, 'store']);
        Route::get('/tambah', [SiswaController::class, 'tambah']);
        Route::get('/edit/{id}', [SiswaController::class, 'edit']);
        Route::put('/update/{id}', [SiswaController::class, 'update']);
        Route::get('/delete/{id}', [SiswaController::class, 'delete']);
        Route::get('/show/{id}', [SiswaController::class, 'show']);
        Route::get('/', [SiswaController::class, 'index']);
    });
    // Route::get('/siswa', [App\Http\Controllers\admin\SiswaController::class, 'index']);
    Route::prefix('guru')->namespace('App\Http\Controllers\admin\GuruController')->group(function () {
        Route::post('/store', [GuruController::class, 'store']);
        Route::get('/tambah', [GuruController::class, 'tambah']);
        Route::get('/edit/{id}', [GuruController::class, 'edit']);
        Route::put('/update/{id}', [GuruController::class, 'update']);
        Route::get('/delete/{id}', [GuruController::class, 'delete']);
        Route::get('/show/{id}', [GuruController::class, 'show']);
        Route::get('/', [GuruController::class, 'index']);
    });
    
    

});



Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboar');

