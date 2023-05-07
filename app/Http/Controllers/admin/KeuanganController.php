<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Biayasekolah;
use App\Models\BiayaSiswa;
use App\Models\Siswa;
class KeuanganController extends Controller
{
    //
    public function index() {

        $countSiswa = DB::table('table_siswa')->count();
        $countGuru = DB::table('table_guru')->count();
        $biayasekolah = Biayasekolah::all();
        $biayaSiswa = Biayasiswa::all();
        $siswa = Siswa::with('biayasiswa')->get();
        $data = [
            'title' => 'Keuangan',
            'countSiswa' => $countSiswa,
            'countGuru' => $countGuru,
            'biayasekolah' => $biayasekolah,
            'biayaSiswa' => $biayaSiswa,
            'siswa' => $siswa,
        ];
        return view('dashboard.admin.keuangan', $data);
      
    }

    public function storeSekolah(Request $request) {
        Biayasekolah::create([
            'invoice' => $request->invoice,
            'tanggal_pengeluaran' => $request->tanggal_pengeluaran,
            'jenis_biaya' => $request->jenis_biaya,
            'nominal' => $request->nominal
        ]);

        return redirect('/keuangan');
    }

    public function tambahSekolah() {
        $data = ['title' => 'Add New Biaya Pengeluaran Sekolah'];
        return view('dashboard.admin.crud.keuangan.create', $data);
    }

    public function storeSiswa(Request $request) {
        BiayaSiswa::create([
            'siswa_id' => $request->siswa_id,
            'jenis_biaya' => $request->jenis_biaya,
            'nominal' => $request->nominal,
            'tanggal_pembayaran' => $request->tanggal_pembayaran
           
        ]);

        return redirect('/keuangan');
    }

    public function tambahSiswa() {
        $data = ['title' => 'Add New Biaya Siswa'];
        return view('dashboard.admin.crud.keuangan.create-siswa', $data);
    }
}
