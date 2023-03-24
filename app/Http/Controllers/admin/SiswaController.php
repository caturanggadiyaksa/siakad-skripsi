<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    //
    public function index(Request $request){

        $data = ['title' => 'Siswa'];
        // return view('dashboard', $data);
        if ($request->user()->role == 'admin') {
            // dd($request->user()->role);
            $siswa = Siswa::all();
            return view('dashboard.admin.siswa', $data, ['siswa' => $siswa]);
        } else {
            
            return view('dashboard.guru.siswa', $data);
        }
    }

    public function tambah() {
        $data = ['title' => 'Add New Siswa'];
        return view('dashboard.admin.crud.siswa.create', $data);

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

        return redirect('/siswa');
    }

    public function edit($id) {
        $data = ['title' => 'Edit Data Siswa'];
        $siswa = Siswa::find($id);
        return view('dashboard.admin.crud.siswa.edit', ['siswa' => $siswa], $data);
    }

    public function update($id, Request $request) {
        // $this->validate($request, [
        //     'nama' => 'required',
        //     'alamat' => 'required'
        // ]);

        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->alamat = $request->alamat;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->nomor_telepon = $request->no_telepon;
        $siswa->save();
        // dd( $guru->nomor_telepon);
        return redirect('/siswa');
    }

    public function delete($id) {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa');
    }

    public function show($id) {
        $data = ['title' => 'Show Data Siswa'];
        $siswa = Siswa::find($id);
        return view('dashboard.admin.crud.siswa.show', ['siswa' => $siswa], $data);
    }
}
