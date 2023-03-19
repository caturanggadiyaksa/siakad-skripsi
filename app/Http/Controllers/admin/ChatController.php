<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function index(Request $request){
        if ($request->user()->role == 'admin') {
            // tampilkan dashboard admin
            return view('dashboard.admin.chat.home');
        } elseif ($request->user()->role == 'guru') {
            // tampilkan dashboard guru
            return view('dashboard.guru.chat.home');
        } else {
            // tampilkan halaman umum jika user tidak memiliki role yang sesuai
            return view('dashboard.siswa.chat.home');
        }
    }
}
