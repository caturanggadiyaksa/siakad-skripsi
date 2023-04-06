@extends('dashboard.siswa.master')
 
@section('content-siswa')
<div class="container-fluid">
    <div class="d-flex justify-content-start align-items-center">
        <div class="row">

            <div class="d-flex justify-content-center align-items-center" style="width: 150px; height: 40px; border-radius: 40px; padding: 6px 15px; border: 2px solid #4D44B5;">
                <select name="" id="" style="border: none; background-color: transparent;">
                    <option value="">Kelas</option>
                    <option value="VII A">VII A</option>
                </select>
            </div>
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
                {{-- @foreach ($siswa as $s)
                <tr>
                    <th>{{ $s->nama }}</th>
                    <th>{{ $s->id_kelas }}</th>
                  
                    <th>{{ $s->tanggal_lahir }}</th>
                    <th>{{ $s->nomor_telepon }}</th>
                    <th style="font-size: 18px !important;">
                        <a href="/siswa/show/{{ $s->id }}">
                            <button style="font-size: 12px !important; color:#FFFFFF !important; text-transform: none !important;" class="btn btn-primary">Show</button>
                        </a>
                        
                       
                      
                    </th>
                  
                    
                </tr> --}}
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
</div>
@endsection