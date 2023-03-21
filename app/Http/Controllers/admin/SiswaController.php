<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index(Request $request){

        $data = ['title' => 'Siswa'];
        // return view('dashboard', $data);
        if ($request->user()->role == 'admin') {
            // dd($request->user()->role);
            return view('dashboard.admin.siswa', $data);
        } else {
            
            return view('dashboard.guru.siswa', $data);
        }
    }
}
