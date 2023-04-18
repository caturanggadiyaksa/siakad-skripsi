<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\GuruController;
use App\Http\Controllers\admin\SiswaController;
use App\Http\Controllers\admin\AksesController;
use App\Http\Controllers\admin\PengumumanController;
use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\guru\DashboardGuruController;
use App\Http\Controllers\admin\KeuanganController;
use App\Http\Controllers\siswa\SiswaPengumumanController;

use App\Http\Middleware\CheckRole;
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

Route::get('/home', function() {
    return redirect('/dashboard');
});

Route::group(['middleware' => ['auth']], function () {
  
    Route::get('/ujian', [App\Http\Controllers\guru\UjianController::class, 'index']);
    Route::get('/nilai', [App\Http\Controllers\guru\NilaiController::class, 'index']);
    Route::get('/tugas', [App\Http\Controllers\guru\TugasController::class, 'index']);
    Route::get('/absen', [App\Http\Controllers\guru\AbsenController::class, 'index']);
    Route::get('/jadwal', [App\Http\Controllers\guru\JadwalController::class, 'index']);
   
    Route::get('/chat', [App\Http\Controllers\admin\ChatController::class, 'index']);
    // Route::get('/keuangan', [App\Http\Controllers\admin\KeuanganController::class, 'index']);

    Route::prefix('keuangan')->namespace('App\Http\Controllers\admin\KeuanganController')->group(function () {
        Route::post('/a/store', [KeuanganController::class, 'storeSekolah']);
        Route::get('/a/tambah', [KeuanganController::class, 'tambahSekolah']);
        Route::post('/b/store', [KeuanganController::class, 'storeSiswa']);
        Route::get('/b/tambah', [KeuanganController::class, 'tambahSiswa']);
        // Route::get('/edit/{id}', [KeuanganController::class, 'edit']);
        // Route::put('/update/{id}', [KeuanganController::class, 'update']);
        // Route::get('/delete/{id}', [KeuanganController::class, 'delete']);
        // Route::get('/show/{id}', [KeuanganController::class, 'show']);
        Route::get('/', [KeuanganController::class, 'index']);
    });


    Route::prefix('pengumuman')->group(function () {
        Route::middleware(['auth'])->group(function () {
            Route::get('/', 'App\Http\Controllers\admin\PengumumanController@index');
            Route::get('/tambah', 'App\Http\Controllers\admin\PengumumanController@tambah')->middleware('admin');
            Route::post('/store', 'App\Http\Controllers\admin\PengumumanController@store')->middleware('admin');
            Route::get('/edit/{id}', 'App\Http\Controllers\admin\PengumumanController@edit')->middleware('admin');
            Route::put('/update/{id}', 'App\Http\Controllers\admin\PengumumanController@update')->middleware('admin');
            Route::get('/delete/{id}', 'App\Http\Controllers\admin\PengumumanController@delete')->middleware('admin');
            Route::get('/show/{id}', 'App\Http\Controllers\admin\PengumumanController@show')->middleware('admin');
            Route::get('/siswa', 'App\Http\Controllers\siswa\SiswaPengumumanController@index')->middleware('siswa');
            Route::get('/siswa/show/{id}', 'App\Http\Controllers\siswa\SiswaPengumumanController@show')->middleware('siswa');
        });
    });
    
   

    // Route::prefix('pengumuman')->group(function () {
    //     Route::middleware(['auth'])->group(function () {
    //         Route::get('/', 'PengumumanController@index');
    //         Route::middleware(['admin'])->namespace('App\Http\Controllers\admin')->group(function () {
                
    //             Route::get('/tambah', 'PengumumanController@tambah');
    //             Route::post('/store', 'PengumumanController@store');
    //             Route::get('/edit/{id}', 'PengumumanController@edit');
    //             Route::put('/update/{id}', 'PengumumanController@update');
    //             Route::get('/delete/{id}', 'PengumumanController@delete');
    //             Route::get('/show/{id}', 'PengumumanController@show');
    //         });
    //         Route::middleware(['siswa'])->namespace('App\Http\Controllers\siswa')->group(function () {
    //             Route::get('/', 'SiswaPengumumanController@index');
    //         });
    //     });
    // });
    
   
    Route::prefix('akses')->namespace('App\Http\Controllers\admin\AksesController')->group(function () {
        Route::post('/store', [AksesController::class, 'store']);
        Route::get('/tambah', [AksesController::class, 'tambah']);
        Route::get('/edit/{id}', [AksesController::class, 'edit']);
        Route::put('/update/{id}', [AksesController::class, 'update']);
        Route::get('/delete/{id}', [AksesController::class, 'delete']);
        Route::get('/show/{id}', [AksesController::class, 'show']);
        Route::get('/', [AksesController::class, 'index']);
    });
    Route::prefix('siswa')->namespace('App\Http\Controllers\admin\SiswaController')->group(function () {
        Route::post('/store', [SiswaController::class, 'store']);
        Route::get('/tambah', [SiswaController::class, 'tambah']);
        Route::get('/edit/{id}', [SiswaController::class, 'edit']);
        Route::put('/update/{id}', [SiswaController::class, 'update']);
        Route::get('/delete/{id}', [SiswaController::class, 'delete']);
        Route::get('/show/{id}', [SiswaController::class, 'show']);
        Route::get('/', [SiswaController::class, 'index']);
    });
    
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

// Route::prefix('dashboard')->middleware(['auth', 'role'])->group(function () {
//     Route::middleware(['role:guru'])->group(function () {
//         Route::get('/', [DashboardGuruController::class, 'index'])->name('dashboard.guru');
//     });

//     Route::middleware(['role:admin'])->group(function () {
//         Route::get('/', [DashboardAdminController::class, 'index'])->name('dashboard.admin');
//     });
// });


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboar');

