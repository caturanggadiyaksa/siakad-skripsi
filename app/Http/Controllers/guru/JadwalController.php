<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Mapel;

class JadwalController extends Controller
{
    //
    public function index(Request $request)
    {
       
        $data = ['title' => 'Jadwal'];

        if ($request->user()->role == 'guru') {
          
            return view('dashboard.guru.jadwal', $data);

        }elseif ($request->user()->role == 'siswa') {
            $mapel = Mapel::with('jadwal')->get();
            // dd($mapel);
            // $jadwal = Jadwal::with('mapel')->get();
            return view('dashboard.siswa.jadwal', $data, ['mapel' => $mapel]);
        }


        
    }
}
