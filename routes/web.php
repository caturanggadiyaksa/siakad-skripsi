<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('/guru', function () { return view('guru'); })->middleware(['checkRole:guru']);
Route::get('/siswa', function () { return view('siswa'); })->middleware(['checkRole:siswa']);


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboar');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
