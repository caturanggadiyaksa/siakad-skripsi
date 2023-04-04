<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    //
    public function index() {

        $countSiswa = DB::table('table_siswa')->count();
        $countGuru = DB::table('table_guru')->count();
       
        $data = [
            'title' => 'Keuangan',
            'countSiswa' => $countSiswa,
            'countGuru' => $countGuru,
        ];
        return view('dashboard.admin.keuangan', $data);
        // return view('dashboard.admin.keuangan', $data, $countSiswa, $countGuru);
    }
}
