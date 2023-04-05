<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Absen;
use App\Models\Mapel;

class AbsenController extends Controller
{
    //
    public function index(Request $request)
    {
       
        $data = ['title' => 'Absen'];

        if ($request->user()->role == 'guru') {
            $siswa = Siswa::all();
            return view('dashboard.guru.absen', $data,  ['siswa' => $siswa]);
        } elseif ($request->user()->role == 'siswa') {
            $user_id = auth()->id();
             $siswa = Siswa::where('user_id', $user_id)->with('absen.mapel')->get();
            
            //  $mapel = Mapel::where('user_id', $user_id)->with('absen')->get();
          
            return view('dashboard.siswa.absen', $data, ['siswa' => $siswa]);
        }
       	

    }
}
