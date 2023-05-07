@extends('dashboard.siswa.master')
 
@section('content-siswa')
<div class="container-fluid">
    <div class="d-flex justify-content-start align-items-center">
        <div class="row">

            <div class="d-flex justify-content-center align-items-center" style="width: 150px; height: 40px; border-radius: 40px; padding: 6px 15px; border: 2px solid #4D44B5;">
                <select name="mapelSelect" id="mapelSelect" style="border: none; background-color: transparent;">
                    <option selected value="">{{ $mapelSelected }}</option>
                    @foreach ($mapel as $m)
                        <option value="{{ $m->nama }}"><a href="/tugas/{{ $m->nama }}">{{ $m->nama }}</a></option>
                    @endforeach
                </select>
                <script>
                    document.getElementById('mapelSelect').addEventListener('change', function() {
                        var selectedMapel = this.value;
                        if (selectedMapel !== '') {
                            var url = '/tugas/' + encodeURIComponent(selectedMapel);
                            window.location.href = url;
                        }
                    });
                </script>
                
                <script>
                    // Menyembunyikan loop data saat halaman pertama kali dimuat
                    $(document).ready(function() {
                        $('#mapelSelect').change(function() {
                            var selectedMapel = $(this).children('option:selected').val();
                           
                            // Logika untuk menampilkan loop data terkait dengan mapel yang dipilih
                            // Misalnya, dengan menggunakan AJAX untuk mengambil dan menampilkan data dari server
                        });
                    });
                </script>
                
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
        <div class="table mt-4 table-sm" style="text-align:center; color: #4D44B5;">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Pertemuan</th>
                        <th scope="col">Topik</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tugasid as $t )
                        <tr>
                            <th>{{ $t->id }}</th>
                            <th>{{ $t->judul }}</th>
                            <th>{{ $t->status }}</th>
                            <th style="font-size: 18px !important;">
                                <a href="{{ $mapelSelected }}/tambah/{{ $t->id }}">
                                    <button style="font-size: 12px !important; color:#FFFFFF !important; text-transform: none !important;" class="btn btn-primary">Submit</button>
                                </a>
                                
                               
                               
                              
                            </th>
                            
                        </tr>
                        
                    @endforeach
    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

{{-- <script>
    $(document).ready(function() {
        $('#mapelSelect').on('change', function() {
            var selectedMapel = $(this).val();
            var url = '/tugas/' + encodeURIComponent(selectedMapel);
            console.log(selectedMapel);
            // Kirim permintaan AJAX ke URL yang dihasilkan
            $.ajax({
                url: url,
                method: 'GET',
                success: function(response) {
                    // Tangani respons dari server di sini
                    console.log(response);
                },
                error: function(xhr) {
                    // Tangani kesalahan jika terjadi
                    console.log(xhr.responseText);
                }
            });
        });
    });

</script> --}}
