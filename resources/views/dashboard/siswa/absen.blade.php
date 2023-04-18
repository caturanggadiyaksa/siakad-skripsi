@extends('dashboard.siswa.master')
 
@section('content-siswa')
<div class="container-fluid">
    <div class="d-flex justify-content-start align-items-center">
        <div class="row">

            {{-- <div class="d-flex justify-content-center align-items-center" style="width: 150px; height: 40px; border-radius: 40px; padding: 6px 15px; border: 2px solid #4D44B5;">
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
                
            </div> --}}
        </div>
        
    </div>

    {{-- <div class="mt-4">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               
                
                @foreach($siswa as $s)
                    @php
                        $mapelArray = [];
                    @endphp

                    @foreach($s->absen as $a)
                        @if(!in_array($a->mapel->nama, $mapelArray))
                            <tr>
                                <td>{{ $a->mapel->nama }}</td>
                                
                                    @foreach($s->absen->where('mapel.nama', $a->mapel->nama) as $absen)
                                       <td> {{ $absen->keterangan }} </td>
                                    @endforeach
                                    @if($s->absen->where('mapel.nama', $a->mapel->nama)->isEmpty())
                                        <td>-</td>
                                    @endif
                             
                            </tr>
                            @php
                                $mapelArray[] = $a->mapel->nama;
                            @endphp
                        @endif
                    @endforeach
                @endforeach

                    
               
            </tbody>
        </table>
    </div> --}}
    <div class="table mt-4 table-sm" style="text-align:center; color: #4D44B5;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Pertemuan 1</th>
                    <th scope="col">Pertemuan 2</th>
                    <th scope="col">Pertemuan 3</th>
                    <th scope="col">Pertemuan 4</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $s)
                    @php
                        $mapelArray = [];
                    @endphp

                    @foreach($s->absen as $a)
                    @if(!in_array($a->mapel->nama, $mapelArray))
                        <tr>
                        <th style="color: #587bcb;">{{ $a->mapel->nama }}</th>
                        @for($i = 1; $i <= 4; $i++)
                            @php
                            $absenPertemuan = $s->absen->where('mapel.nama', $a->mapel->nama)->where('pertemuan', $i)->first();
                            @endphp
                            <td>{{ $absenPertemuan ? $absenPertemuan->keterangan : 'Belum' }}</td>
                        @endfor
                        <td>
                            <a href="/absen/show/{{ $a->mapel->id }}">
                            <button type="button" class="btn btn-primary btn-sm" style="border-radius: 15px; width: 76px; font-size: 12px; height: 35px; font-weight: bold; color: white">Show</button>
                            </a>
                        </td>
                        </tr>
                        @php
                        $mapelArray[] = $a->mapel->nama;
                        @endphp
                    @endif
                    @endforeach

                    {{-- @foreach($s->absen as $a)
                        @if(!in_array($a->mapel->nama, $mapelArray))
                            <tr>
                                <th style="color: #587bcb;">{{ $a->mapel->nama }}</th>
                                
                                    @foreach($s->absen->where('mapel.nama', $a->mapel->nama) as $absen)
                                       <td> {{ $absen->keterangan }} </td>
                                    @endforeach
                                    @if($s->absen->where('mapel.nama', $a->mapel->nama)->isEmpty())
                                        <td>-</td>
                                    @endif
                                
                                <td>
                                    <a href="/keuangan/edit/">
                                        <button type="button" class="btn btn-primary btn-sm" style="border-radius: 15px; width: 76px; font-size: 12px; height: 35px; font-weight: bold; color: white">Show</button>
                                    </a>
                                   
                                    
                                </td>
                            </tr>
                            @php
                                $mapelArray[] = $a->mapel->nama;
                            @endphp
                        @endif
                    @endforeach --}}
                @endforeach
               
               


            </tbody>
        </table>
    </div>
</div>
@endsection