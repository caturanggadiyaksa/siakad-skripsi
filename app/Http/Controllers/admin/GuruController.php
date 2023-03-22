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
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/guru');
    }

    public function edit($id) {
        $guru = Guru::find($id);
        return view('dashboard.admin.crud.guru.edit', ['guru' => $guru]);
    }

    public function update($id, Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $guru = Guru::find($id);
        $guru->nama = $request->nama;
        $guru->alamat = $request->alamat;
        $guru->save();
        return redirect('/guru');
    }

    public function hapus($id) {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('/guru');
    }
}
