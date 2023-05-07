<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    //
    public function index(Request $request){
        $data = ['title' => 'Pengumuman'];
        $pengumuman = Pengumuman::all();

        return view('dashboard.admin.pengumuman', $data, ['pengumuman' => $pengumuman]);
    }

    public function tambah() {
        $data = ['title' => 'Add New Pengumuman'];
        return view('dashboard.admin.crud.pengumuman.create', $data);

    }
    public function store(Request $request) {
        $this->validate($request, [
            'judul_pengumuman' => 'required',
            'isi_pengumuman' => 'required'
        ]);

        Pengumuman::create([
            'judul_pengumuman' => $request->judul_pengumuman,
            'isi_pengumuman' => $request->isi_pengumuman,
            'tgl_posting' => $request->tanggal
        ]);

        return redirect('/pengumuman');
    }


    public function show($id) {
        $data = ['title' => 'Show Data Pengumuman'];
        $pengumuman = Pengumuman::find($id);

        
        return view('dashboard.admin.crud.pengumuman.show', ['pengumuman' => $pengumuman], $data);
    }

    public function delete($id) {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();
        // dd($pengumuman);
        return redirect('/pengumuman');
    }

    public function update($id, Request $request) {

        $pengumuman = Pengumuman::find($id);
        $pengumuman->judul_pengumuman = $request->judul_pengumuman;
        $pengumuman->isi_pengumuman = $request->isi_pengumuman;
        $pengumuman->tgl_posting = $request->tanggal;
        $pengumuman->save();
        return redirect('/pengumuman');
    }
}
