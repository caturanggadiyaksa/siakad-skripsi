<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function index(Request $request){

        $data = ['title' => 'Guru'];
       
        if ($request->user()->role == 'admin') {
            // dd($request->user()->role);
            return view('dashboard.admin.guru', $data);
        } else {
            
            return view('dashboard.guru.guru', $data);
        }
    }
}
