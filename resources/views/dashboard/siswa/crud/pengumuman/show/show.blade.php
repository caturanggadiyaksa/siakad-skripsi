@extends('dashboard.siswa.master')
 
@section('content-siswa')

<div class="container-fluid">
    <div class="col-8 card" style="min-height: 85vh; border-radius: 20px;">
        <div>
            <h4>{{ $pengumuman->judul_pengumuman }}</h4>
        </div>

        <div>
            <p>{{ $pengumuman->isi_pengumuman }}</p>
        </div>

        <div>
            <div class="col-2">
                <a href="/pengumuman/siswa">
                  <input type="button" class="form-control"  value="Back">
                </a>
              
              </div>
        </div>
    </div>
</div>
 
@endsection