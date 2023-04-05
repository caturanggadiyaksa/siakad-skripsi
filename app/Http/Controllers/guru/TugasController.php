<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class TugasController extends Controller
{
    //
    public function index(Request $request)
    {
       
        $data = ['title' => 'Tugas'];

        if ($request->user()->role == 'guru') {
            $siswa = Siswa::all();
            return view('dashboard.guru.tugas', $data,  ['siswa' => $siswa]);
        } 

    }
}
