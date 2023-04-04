<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    //
    public function index(Request $request)
    {
       
        $data = ['title' => 'Jadwal'];

        if ($request->user()->role == 'guru') {
          
            return view('dashboard.guru.jadwal', $data);

        }elseif ($request->user()->role == 'siswa') {
        //    dd($request->user()->role);
            return view('dashboard.siswa.jadwal', $data);
        }


        
    }
}
