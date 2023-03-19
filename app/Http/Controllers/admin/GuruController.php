<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function index(Request $request){
        if ($request->user()->role == 'admin') {
            // dd($request->user()->role);
            return view('dashboard.admin.guru');
        } else {
            
            return view('dashboard.guru.guru');
        }
    }
}
