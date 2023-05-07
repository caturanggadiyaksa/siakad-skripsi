@extends('dashboard.admin.master')
 

@section('konten')

<div class="container-fluid">
  <div class="card col-12 mt-2 mb-2">
    <form class="m-4 p-4" action="/pengumuman/store" method="POST">
      {{ csrf_field() }}
     

      
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Judul Pengumuman</label>
        <div class="col-sm-10">
          <input type="text" name="judul_pengumuman" class="form-control"  placeholder="">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Isi pengumuman</label>
        <div class="col-sm-10">
          <input type="text" name="isi_pengumuman" class="form-control"  placeholder="">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-10">
          <input type="date" name="tanggal" class="form-control" placeholder="">
        </div>
      </div>
     
      <div class="form-group row" style="justify-content: center;">
        <div class="col-2">
          <input type="submit" class="form-control"  value="Simpan">
        </div>
        <div class="col-2">
          <a href="/pengumuman">
            <input type="button" class="form-control"  value="Cancel">
          </a>
        
        </div>
      
      </div>
   
    </form>
  </div>
  

</div>

@endsection

