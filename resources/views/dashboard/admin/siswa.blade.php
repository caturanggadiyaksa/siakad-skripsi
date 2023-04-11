@extends('dashboard.admin.master')
 

@section('konten')

<div class="container-fluid">
    <div class=" d-flex justify-content-between align-items-center">
        {{-- <div class="col-3" style="">
            <div class="input-group" >
              <button style="background-color: #FFFFFF; border-radius: 20px 0 0 20px;" class=" border-0 px-3" type="button">
                <i style="color:#4D44B5;" class="far fa-search"></i>
              </button>
              <input style="background-color: #FFFFFF; border-radius: 0 20px 20px 0;" type="text" class="form-control border-0" placeholder="Cari" aria-label="Cari" aria-describedby="basic-addon2">
            
            </div>
        </div> --}}
        <div class="d-flex justify-content-end align-items-center">
            {{-- <div class="col-6">

                <div class="d-flex justify-content-center align-items-center" style="width: 150px; height: 40px; border-radius: 40px; padding: 6px 15px; border: 2px solid #4D44B5;">
                    <select name="" id="" style="border: none; background-color: transparent;">
                        <option value="">Kelas</option>
                        <option value="VII A">VII A</option>
                    </select>
                </div>
            </div> --}}
            <div class="col-12">
        
                <div class="d-flex justify-content-center align-items-center" style="width: 150px; height: 40px; border-radius: 40px; padding: 6px 15px; background: #4D44B5; ">
                    <a href="/siswa/tambah">
                        <button style="border: none; background-color: transparent; color: #FFFFFF;">
                            <i class="fa-regular fa-plus"></i>
                            <span>Add New</span>
                        </button>
                    </a>
                    
                </div>
            </div>
        </div>
    
    </div>


    <div class="mt-4">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    {{-- <th>Jurusan</th>
                    <th>Tahun Masuk</th> --}}
                    <th>Tanggal Lahir</th>
                    <th>Nomor Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                <tr>
                    <th>{{ $s->nama }}</th>
                    <th>{{ $s->id_kelas }}</th>
                    {{-- <th>{{ $s->jenis_kelamin }}</th>
                    <th>{{ $s->alamat }}</th> --}}
                    <th>{{ $s->tanggal_lahir }}</th>
                    <th>{{ $s->nomor_telepon }}</th>
                    <th style="font-size: 18px !important;">
                        <a href="/siswa/show/{{ $s->id }}">
                            <button style="font-size: 12px !important; color:#FFFFFF !important; text-transform: none !important;" class="btn btn-primary">Show</button>
                        </a>
                        <a href="/siswa/edit/{{ $s->id }}">
                            <button style="font-size: 12px !important; color:#FFFFFF !important; text-transform: none !important;" class="btn btn-warning">Edit</button>
                        </a>
                        <a href="/siswa/delete/{{ $s->id }}">
                            <button style="font-size: 12px !important; color:#FFFFFF !important; text-transform: none !important;" class="btn btn-danger">Delete</button>
                        </a>
                       
                      
                    </th>
                  
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
   
@endsection


