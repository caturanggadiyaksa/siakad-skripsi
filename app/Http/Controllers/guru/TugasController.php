<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Tugas;

class TugasController extends Controller
{
    //
    public function index(Request $request)
    {
       
        $data = ['title' => 'Tugas'];

        if ($request->user()->role == 'guru') {
            $siswa = Siswa::all();
            return view('dashboard.guru.tugas', $data,  ['siswa' => $siswa]);
        } elseif ($request->user()->role == 'siswa') {
            $mapel = Mapel::all();
            $tugas = Tugas::all();
            $dataTugas = [
                'mapel' => $mapel,
                'tugas' => $tugas
            ];
            return view('dashboard.siswa.tugas', $data, $dataTugas);
            
        } else {
            // return redirect('/login');
        }

    }

    public function requestMapel(Request $request, $mapel)
    {
        $data = ['title' => 'Tugas'];
        $mapelQuery = $mapel;
        $mapelData = Mapel::all();
       
        $result = Tugas::where('nama_mapel', $mapelQuery)->get();
        $dataTugas = [
            'mapelSelected' => $mapel,
            'mapel' => $mapelData,
            'tugasid' => $result
        ];
        // dd($result);
    
        return view('dashboard.siswa.tugasid', $data, $dataTugas);
    }
    public function tambahTugas($mapel) {
        $data = ['title' => 'Submit Tugas'];
        $mapelQuery = $mapel;
        $mapelData = Mapel::all();
       
        $result = Tugas::where('nama_mapel', $mapelQuery)->get();
        $dataTugas = [
            'mapelSelected' => $mapel,
            'mapel' => $mapelData,
            'tugasid' => $result
        ];
        return view('dashboard.siswa.addtugas', $data, $dataTugas);
    }
    
}
