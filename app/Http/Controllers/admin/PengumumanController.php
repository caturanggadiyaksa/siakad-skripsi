<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    //
    public function index(Request $request){
        $data = ['title' => 'Pengumuman'];
        
        if ($request->user()->role == 'admin') {
            // dd($request->user()->role);
            return view('dashboard.admin.pengumuman', $data);
        } else {
            
            return view('dashboard.guru.pengumuman', $data);
        }
    }
}
