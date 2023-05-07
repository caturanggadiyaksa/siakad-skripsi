<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    //
    public function index(Request $request) {
        $data = ['title' => 'Dashboard'];
        if ($request->user()->role == 'admin') {
            // tampilkan dashboard admin
            return view('dashboard.admin.home', $data);
        }
    }
}
