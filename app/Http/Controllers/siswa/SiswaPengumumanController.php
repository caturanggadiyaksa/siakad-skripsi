<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;

class SiswaPengumumanController extends Controller
{
    //
    public function index() {
        $data = ['title' => 'Pengumuman'];
        $pengumuman = Pengumuman::all();
        return view('dashboard.siswa.pengumuman', $data, ['pengumuman' => $pengumuman]);
            
    
    }

    public function show($id) {
        $data = ['title' => 'Pengumuman'];
        $pengumuman = Pengumuman::find($id);

        
        return view('dashboard.siswa.crud.pengumuman.show.show', ['pengumuman' => $pengumuman], $data);
    }
    
}
