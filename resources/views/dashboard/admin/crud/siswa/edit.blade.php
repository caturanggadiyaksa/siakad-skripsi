@extends('dashboard.admin.master')
 

@section('konten')

<div class="container-fluid">
  <div class="card col-12 mt-2 mb-2">
    <form class="m-4 p-4" action="/siswa/update/{{ $siswa->id }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}

  
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" name="nama" class="form-control" id="inputPassword" value="{{ $siswa->nama }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">id_kelas</label>
        <div class="col-sm-10">
          <input type="text" name="id_kelas" class="form-control" id="inputPassword" value="{{ $siswa->id_kelas }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <input type="text" name="jenis_kelamin" class="form-control" id="inputPassword" value="{{ $siswa->jenis_kelamin }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" name="alamat" class="form-control" id="inputPassword" value="{{ $siswa->alamat }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <input type="text" name="tanggal_lahir" class="form-control" id="inputPassword" value="{{ $siswa->tanggal_lahir }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">No Telepon</label>
        <div class="col-sm-10">
          <input type="text" name="no_telepon" class="form-control" id="inputPassword" value="{{ $siswa->nomor_telepon }}">
        </div>
      </div>
      <div class="form-group row" style="justify-content: center;">
        <div class="col-2">
          <input type="submit" class="form-control"  value="Simpan">
        </div>
        <div class="col-2">
          <a href="/siswa">
            <input type="button" class="form-control"  value="Cancel">
          </a>
        
        </div>
      
      </div>
   
    </form>
  </div>
  

</div>

@endsection

