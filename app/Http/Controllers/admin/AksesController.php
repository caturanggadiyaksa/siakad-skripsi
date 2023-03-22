<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AksesController extends Controller
{
    //
    public function index(Request $request){

        $data = ['title' => 'Manajemen Akses'];
        
        if ($request->user()->role == 'admin') {
            // tampilkan dashboard admin
            return view('dashboard.admin.akses', $data);
        } else {
            // tampilkan halaman umum jika user tidak memiliki role yang sesuai
            return redirect('/login');
            

        }

      

    }
}
