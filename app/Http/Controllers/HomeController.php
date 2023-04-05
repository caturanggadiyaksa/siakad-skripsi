<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
       
        $data = ['title' => 'Dashboard'];

        if ($request->user()->role == 'admin') {
            // tampilkan dashboard admin
            return view('dashboard.admin.home', $data);
        } elseif ($request->user()->role == 'guru') {
            // tampilkan dashboard guru
            return view('dashboard.guru.home', $data);
        } else {
            // tampilkan halaman umum jika user tidak memiliki role yang sesuai
            return view('dashboard.siswa.home', $data);
        }


        // return view('home');
    }
}
