@extends('dashboard.siswa.master')
 
@section('content-siswa')
<div class="container-fluid">
    <div class="card col-12 mt-2 mb-2">
        <form class="m-4 p-4" action="/pengumuman/store" method="POST">
          {{ csrf_field() }}
         
          <div class="form-group row">
            <div>
                @foreach ($tugasid as $t )
                    <h3>Pertemuan {{ $t->id }}</h3>
                    <h4>{{ $t->judul }}</h4>
                    <p>{{ $t->status }}</p>
                @endforeach
               
            </div>
          
          </div>
          
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Link Tugas</label>
            <div class="col-sm-10">
              <input type="text" name="link_tugas" class="form-control"  placeholder="">
            </div>
          </div>
          
         
          <div class="form-group row" style="justify-content: center;">
            <div class="col-2">
              <input type="submit" class="form-control"  value="Simpan">
            </div>
            <div class="col-2">
              <a href="/tugas">
                <input type="button" class="form-control"  value="Cancel">
              </a>
            
            </div>
          
          </div>
       
        </form>
      </div>
      
</div>
@endsection

