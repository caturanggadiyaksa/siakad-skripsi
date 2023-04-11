@extends('dashboard.admin.master')
 

@section('konten')

<div class="container-fluid">
  <div class="card col-12 mt-2 mb-2">
    <form class="m-4 p-4" action="/guru/update/{{ $guru->id }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}

      {{-- <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nip</label>
        <div class="col-sm-10">
          <input type="text" name="nip" class="form-control" id="inputPassword" value="{{ $guru->nip }}">
        </div>
      </div> --}}
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" name="nama" class="form-control" id="inputPassword" value="{{ $guru->nama }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <input type="text" name="jenis_kelamin" class="form-control" id="inputPassword" value="{{ $guru->jenis_kelamin }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" name="alamat" class="form-control" id="inputPassword" value="{{ $guru->alamat }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <input type="text" name="tanggal_lahir" class="form-control" id="inputPassword" value="{{ $guru->tanggal_lahir }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">No Telepon</label>
        <div class="col-sm-10">
          <input type="text" name="no_telepon" class="form-control" id="inputPassword" value="{{ $guru->nomor_telepon }}">
        </div>
      </div>
      <div class="form-group row" style="justify-content: center;">
        <div class="col-2">
          <input type="submit" class="form-control"  value="Simpan">
        </div>
        <div class="col-2">
          <a href="/guru">
            <input type="button" class="form-control"  value="Cancel">
          </a>
        
        </div>
      
      </div>
   
    </form>
  </div>
  

</div>

@endsection

