<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function chatAdmin() {
        return view('dashboard.admin.chat.home');
    }
    public function chatGuru() {
        return view('dashboard.guru.chat.home');
    }
    public function chatSiswa() {
        return view('dashboard.siswa.chat.home');
    }
}
