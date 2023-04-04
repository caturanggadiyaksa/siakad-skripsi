<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    //
    public function index(Request $request){
        $data = ['title' => 'Pengumuman'];
        
        if ($request->user()->role == 'admin') {
           
            return view('dashboard.admin.pengumuman', $data);
        } elseif ($request->user()->role == 'siswa') {
           
            return view('dashboard.siswa.pengumuman', $data);
        }else {
            
            return view('/login');
        }
    }

    public function tambah() {
        $data = ['title' => 'Add New Pengumuman'];
        return view('dashboard.admin.crud.pengumuman.create', $data);

    }
    public function store(Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Siswa::create([
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nomor_telepon' => $request->no_telepon
        ]);

        return redirect('/pengumuman');
    }
}
