<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Guru;

class GuruController extends Controller
{
    //
    public function index(Request $request){

        $data = ['title' => 'Guru'];
       
        if ($request->user()->role == 'admin') {
            // dd($request->user()->role);
            $guru = Guru::all();
            return view('dashboard.admin.guru', ['guru' => $guru], $data);
        } else {
            
            return view('dashboard.guru.guru', $data);
        }
    }


    public function tambah() {
        $data = ['title' => 'Add New Guru'];
        return view('dashboard.admin.crud.guru.create', $data);

    }
    public function store(Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Guru::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nomor_telepon' => $request->no_telepon
        ]);

        return redirect('/guru');
    }

    public function edit($id) {
        $data = ['title' => 'Edit Data Guru'];
        $guru = Guru::find($id);
        return view('dashboard.admin.crud.guru.edit', ['guru' => $guru], $data);
    }

    public function update($id, Request $request) {
        // $this->validate($request, [
        //     'nama' => 'required',
        //     'alamat' => 'required'
        // ]);

        $guru = Guru::find($id);
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->alamat = $request->alamat;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->nomor_telepon = $request->no_telepon;
        $guru->save();
        // dd( $guru->nomor_telepon);
        return redirect('/guru');
    }

    public function delete($id) {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('/guru');
    }

    public function show($id) {
        $data = ['title' => 'Show Data Guru'];
        $guru = Guru::find($id);
        return view('dashboard.admin.crud.guru.show', ['guru' => $guru], $data);
    }
}
