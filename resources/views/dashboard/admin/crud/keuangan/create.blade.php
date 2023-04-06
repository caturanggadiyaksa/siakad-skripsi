@extends('dashboard.admin.master')
 

@section('konten')

<div class="container-fluid">
  <div class="card col-12 mt-2 mb-2">
    <form class="m-4 p-4" action="" method="POST">
      {{ csrf_field() }}
     
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Invoice</label>
        <div class="col-sm-10">
          <input type="text" name="invoice" class="form-control" id="inputPassword" placeholder="">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Pengeluaran</label>
        <div class="col-sm-10">
          <input type="text" name="tanggal_pengeluaran" class="form-control" id="inputPassword" placeholder="">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Biaya</label>
        <div class="col-sm-10">
          <input type="text" name="jenis_biaya" class="form-control" id="inputPassword" placeholder="">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nominal</label>
        <div class="col-sm-10">
          <input type="text" name="nominal" class="form-control" id="inputPassword" placeholder="">
        </div>
      </div>
      
      <div class="form-group row" style="justify-content: center;">
        <div class="col-2">
          <input type="submit" class="form-control"  value="Simpan">
        </div>
        <div class="col-2">
          <a href="/keuangan">
            <input type="button" class="form-control"  value="Cancel">
          </a>
        
        </div>
      
      </div>
   
    </form>
  </div>
  

</div>

@endsection

