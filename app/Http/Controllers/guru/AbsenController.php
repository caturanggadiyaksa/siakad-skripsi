<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class AbsenController extends Controller
{
    //
    public function index(Request $request)
    {
       
        $data = ['title' => 'Absen'];

        if ($request->user()->role == 'guru') {
            $siswa = Siswa::all();
            return view('dashboard.guru.absen', $data,  ['siswa' => $siswa]);
        } elseif ($request->user()->role == 'siswa') {
            $siswa = Siswa::all();
            return view('dashboard.siswa.absen', $data, ['siswa' => $siswa]);
        }

    }
}
