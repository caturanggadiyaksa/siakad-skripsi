<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class NilaiController extends Controller
{
    //
    public function index(Request $request)
    {
       
        $data = ['title' => 'Nilai'];

        if ($request->user()->role == 'guru') {
            $siswa = Siswa::all();
            return view('dashboard.guru.nilai', $data,  ['siswa' => $siswa]);
        } 

    }
}
