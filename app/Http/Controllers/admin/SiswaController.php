<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index(Request $request){
        if ($request->user()->role == 'admin') {
            // dd($request->user()->role);
            return view('dashboard.admin.siswa');
        } else {
            
            return view('dashboard.guru.siswa');
        }
    }
}
