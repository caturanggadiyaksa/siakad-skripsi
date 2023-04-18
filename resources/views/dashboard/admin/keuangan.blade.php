@extends('dashboard.admin.master')
 

@section('konten')
<div class="container-fluid">
    <div class="row">
        <div class="card" style="width: 15rem;">
        
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-center" style="background-color: #4D44B5; border-radius: 40px; width: 62px; height: 62px;">
                            <i style="color:#FFFFFF;" class="fa-regular fa-user-graduate fa-2xl"></i>
                        </div>
                    </div>
                   <div class="col-8">
                    <h5 class="card-title">Total Siswa</h5>
                    <p class="card-text">{{ $countSiswa }}</p>
                   </div>
                </div>
               
            </div>
        </div>

        <div class="card mx-2" style="width: 15rem;">
        
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-center" style="background-color: #FB7D5B; border-radius: 40px; width: 62px; height: 62px;">
                            <i style="color:#FFFFFF;" class="fa-regular fa-user-tie fa-2xl"></i>
                        </div>
                       
                    </div>
                   <div class="col-8">
                    <h5 class="card-title">Total Guru</h5>
                    <p class="card-text">{{ $countGuru }}</p>
                   </div>
                </div>
               
            </div>
        </div>
    </div>

    <div class="container-satu mt-4" style="margin: auto; background-color: white; box-shadow: 0px 0px 0px 1px lightgray; padding: 20px; box-sizing: border-box; max-width: 1200px;">

		
		<div class="content-satu">
			
			<div class="group1" style="display:flex; justify-content: space-between; align-items: center;">
				<!-- judul -->
				<div class="judul">
					<h5 style="color:#4D44B5; font-weight:bold;">School Expense</h5>
				</div>

				<div class="addujian">

					<!-- btn submit -->
					<div class="btn-action">
                        <a href="/keuangan/a/tambah">
                            <button type="button" class="btn" style="background-color: #4D44B5; color:white; border-radius:30px; width: 150px; height: 40px;"><i class="fa fa-plus" aria-hidden="true"></i> Add Record</button>
                        </a>
						
					</div>
					<!-- end btn submit -->
				</div>
			</div>

			<hr>

			<div class="card">

				<div class="card-body">
					<div class="row">
						@foreach ($biayasekolah as $b)
						<div class="my-2 d-flex align-items-center" style="">
							<div class="mx-4">
								<div class="d-flex align-items-center justify-content-center" style="background-color: #FF4550; border-radius: 40px; width: 40px; height: 40px;">
									<i style="color: #FFFFFF;" class="fa-solid fa-arrow-trend-up"></i>
								</div>
							</div>
							<div class="mx-4">
								<div  style="display: flex; flex-direction: column;">
									<span class="card-text">{{ $b->invoice }}</span>
									<span class="card-text">{{ $b->tanggal_pengeluaran }}</span>
								</div>

							</div>
							<div class="mx-4">
								<p class="card-text"> {{ $b->nominal }}</p>
							</div>
							<div class="mx-4">
								<p class="card-text text-success"><b>Completed</b></p>
							</div>
						</div>

						@endforeach
					</div>
				</div>


				<!-- paggination -->
				<div class="paggination" style="display:flex; justify-content: flex-end; align-content: center;">

					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous" style="border: none; color: gray;">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item ml-2"><a class="page-link" href="#"  style="background-color: #4D44B5; color: white; border-radius:50px;">1</a></li>
							<li class="page-item ml-2"><a class="page-link" href="#"  style="background-color: #4D44B5; color: white; border-radius:50px;">2</a></li>
							<li class="page-item ml-2"><a class="page-link" href="#"  style="background-color: #4D44B5; color: white; border-radius:50px;">3</a></li>
							<li class="page-item ml-2">
								<a class="page-link" href="#" aria-label="Next"  style="border: none; color: gray;">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- end of paggination -->
			</div>
		</div>
	</div>


	<div class="container-dua mt-4 mb-4" style="margin: auto; background-color: white; box-shadow: 0px 0px 0px 1px lightgray; padding: 20px; box-sizing: border-box; max-width: 1200px;">
		<!-- content 2 -->
		<div class="content-dua">

			<div class="group1" style="display:flex; justify-content: space-between; align-items: center;">
				<!-- judul -->
				<div class="judul">
					<h5 style="color:#4D44B5; font-weight:bold;">Pembayaran</h5>
				</div>

				<div class="addujian">

					<!-- btn submit -->
					<div class="btn-action">
						<button type="button" class="btn" style="background-color: #4D44B5; color:white; border-radius:30px; width: 150px; height: 40px;"><i class="fa fa-plus" aria-hidden="true"></i> Add Record</button>
					</div>
					<!-- end btn submit -->
				</div>
			</div>

			<div class="table mt-4 table-sm" style="text-align:center; color: #4D44B5;">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Nama</th>
							<th scope="col">ID</th>
							<th scope="col">Kelas</th>
							<th scope="col">Biaya</th>
							<th scope="col">Status</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($siswa as $s)
							@foreach($s->biayasiswa as $bs)
							<tr>
								
								<th style="color: #587bcb; text-align: left;">{{ $s->nama }}</th>
								<td><b>{{ $bs->jenis_biaya }}</b></td>
{{-- 
								<td class="d-flex align-items-center justify-content-center">

									<div class="d-flex align-items-center justify-content-center" style="background-color: #FF4550; border-radius: 40px; width: 40px; height: 40px;">
										<i style="color: #FFFFFF;" class="fa-solid fa-user"></i>
									</div>

									<div style="display: flex; flex-direction: column; margin-left: 15px;">
										<span class="card-text" style="color: darkgray;">Class</span>
										<span class="card-text"><b>VII A</b></span>
									</div>

								</td> --}}
								<td><b>{{ $bs->nominal }}</b></td>
								@if ($bs->tanggal_pembayaran == '')
									<td>-</td>
									<td>Belum Dibayar</td>
								@else
								<td>{{ $bs->tanggal_pembayaran }}</td>
								<td>Dibayar</td>
								@endif
								
								
								<td>
									<a href="/keuangan/edit/{{ $bs->id }}">
										<button type="button" class="btn btn-warning btn-sm" style="border-radius: 15px; width: 76px; font-size: 12px; height: 35px; font-weight: bold; color: white">Edit</button>
									</a>
									<a href="/keuangan/delete/{{ $bs->id }}">
										<button type="button" class="btn btn-danger btn-sm" style="border-radius: 15px; width: 76px; font-size: 12px; height: 35px; font-weight: bold;">Hapus</button>
									</a>
									
									
								</td>
								
							</tr>
							@endforeach
						@endforeach
						{{-- <tr>
							<th style="color: #587bcb; text-align: left;"><img width="40" height="40" style="border-radius: 50%; background-color: #587bcb;"> Jordan Nico</th>
							<td><b>ID 123456</b></td>

							<td class="d-flex align-items-center justify-content-center">

								<div class="d-flex align-items-center justify-content-center" style="background-color: #FF4550; border-radius: 40px; width: 40px; height: 40px;">
									<i style="color: #FFFFFF;" class="fa-solid fa-user"></i>
								</div>

								<div style="display: flex; flex-direction: column; margin-left: 15px;">
									<span class="card-text" style="color: darkgray;">Class</span>
									<span class="card-text"><b>VII A</b></span>
								</div>

							</td>

							<td><b>$ 50,036</b></td>
							<td>Dibayar</td>
							<td>
								
								<button type="button" class="btn btn-warning btn-sm" style="border-radius: 15px; width: 76px; font-size: 12px; height: 35px; font-weight: bold; color: white;">Edit</button>

								<button type="button" class="btn btn-danger btn-sm" style="border-radius: 15px; width: 76px; font-size: 12px; height: 35px; font-weight: bold;">Hapus</button>

							</td>
						</tr>

						<tr>
							<th style="color: #587bcb; text-align: left;"><img width="40" height="40" style="border-radius: 50%; background-color: #587bcb;"> Karen Hope</th>
							<td><b>ID 123456</b></td>

							<td class="d-flex align-items-center justify-content-center">

								<div class="d-flex align-items-center justify-content-center" style="background-color: #FF4550; border-radius: 40px; width: 40px; height: 40px;">
									<i style="color: #FFFFFF;" class="fa-solid fa-user"></i>
								</div>

								<div style="display: flex; flex-direction: column; margin-left: 15px;">
									<span class="card-text" style="color: darkgray;">Class</span>
									<span class="card-text"><b>VII A</b></span>
								</div>

							</td>

							<td><b>$ 50,036</b></td>
							<td>Belum</td>
							<td>
								
								<button type="button" class="btn btn-warning btn-sm" style="border-radius: 15px; width: 76px; font-size: 12px; height: 35px; font-weight: bold; color: white">Edit</button>

								<button type="button" class="btn btn-danger btn-sm" style="border-radius: 15px; width: 76px; font-size: 12px; height: 35px; font-weight: bold;">Hapus</button>

							</td>
						</tr>

						<tr>
							<th style="color: #587bcb; text-align: left;"><img width="40" height="40" style="border-radius: 50%; background-color: #587bcb;"> Nadia Adja</th>
							<td><b>ID 123456</b></td>

							<td class="d-flex align-items-center justify-content-center">

								<div class="d-flex align-items-center justify-content-center" style="background-color: #FF4550; border-radius: 40px; width: 40px; height: 40px;">
									<i style="color: #FFFFFF;" class="fa-solid fa-user"></i>
								</div>

								<div style="display: flex; flex-direction: column; margin-left: 15px;">
									<span class="card-text" style="color: darkgray;">Class</span>
									<span class="card-text"><b>VII A</b></span>
								</div>

							</td>

							<td><b>$ 50,036</b></td>
							<td>Belum</td>
							<td>
								
								<button type="button" class="btn btn-warning btn-sm" style="border-radius: 15px; width: 76px; font-size: 12px; height: 35px; font-weight: bold; color: white">Edit</button>

								<button type="button" class="btn btn-danger btn-sm" style="border-radius: 15px; width: 76px; font-size: 12px; height: 35px; font-weight: bold;">Hapus</button>

							</td>
						</tr> --}}


					</tbody>
				</table>
			</div>

		</div>

		<!-- paggination -->
		<div class="paggination" style="display:flex; justify-content: flex-end; align-content: center;">

			<nav aria-label="Page navigation example">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous" style="border: none; color: gray;">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">Previous</span>
						</a>
					</li>
					<li class="page-item ml-2"><a class="page-link" href="#"  style="background-color: #4D44B5; color: white; border-radius:50px;">1</a></li>
					<li class="page-item ml-2"><a class="page-link" href="#"  style="background-color: #4D44B5; color: white; border-radius:50px;">2</a></li>
					<li class="page-item ml-2"><a class="page-link" href="#"  style="background-color: #4D44B5; color: white; border-radius:50px;">3</a></li>
					<li class="page-item ml-2">
						<a class="page-link" href="#" aria-label="Next"  style="border: none; color: gray;">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Next</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<!-- end of paggination -->

	</div>
   
    {{-- <div class="row mt-4">
        <div class="row">
            <div class="d-flex align-items-center justify-content-between mb-2 mt-4">
                <div>
                    <div>
                        <h5>Pembayaraan Sekolah</h5>
                    </div>
                </div>
                <div>
                    <div class="d-flex justify-content-center align-items-center" style="width: 150px; height: 40px; border-radius: 40px; padding: 6px 15px; background: #4D44B5; ">
                        <a href="/keuangan/a/tambah">
                            <button style="border: none; background-color: transparent; color: #FFFFFF;">
                                <i class="fa-regular fa-plus"></i>
                                <span>Add New</span>
                            </button>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="card">
        
                <div class="card-body">
                    <div class="row">
                      
                        @foreach ($biayasekolah as $b)
                        <div class="my-2 d-flex align-items-center" style="">
                            <div class="mx-4">
                                <div class="d-flex align-items-center justify-content-center" style="background-color: #FF4550; border-radius: 40px; width: 40px; height: 40px;">
                                    <i style="color: #FFFFFF;" class="fa-solid fa-arrow-trend-up"></i>
                                </div>
                            </div>
                            <div class="mx-4">
                                <div  style="display: flex; flex-direction: column;">
                                    <span class="card-text">{{ $b->invoice }}</span>
                                    <span class="card-text">{{ $b->tanggal_pengeluaran }}</span>
                                </div>
                               
                            </div>
                            <div class="mx-4">
                                <p class="card-text"> Rp {{ $b->nominal }}</p>
                            </div>
                            <div class="mx-4">
                                <p class="card-text">{{ $b->jenis_biaya }}</p>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </div> --}}
  

    {{-- <div class="row mt-4">
        <div class="row">
            <div class="d-flex align-items-center justify-content-between mb-2 mt-4">
                <div>
                    <div>
                        <h5>Pembayaraan</h5>
                    </div>
                </div>
                <div>
                    <div class="d-flex justify-content-center align-items-center" style="width: 150px; height: 40px; border-radius: 40px; padding: 6px 15px; background: #4D44B5; ">
                        <a href="/keuangan/b/tambah">
                            <button style="border: none; background-color: transparent; color: #FFFFFF;">
                                <i class="fa-regular fa-plus"></i>
                                <span>Add New</span>
                            </button>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="card">
        
                <div class="card-body">
                    <div class="row">
                   
                        @foreach ($biayaSiswa as $bs)
                        <div class="my-2 d-flex align-items-center" style="">
                            <div class="mx-4">
                                <div class="d-flex align-items-center justify-content-center" style="background-color: #FF4550; border-radius: 40px; width: 40px; height: 40px;">
                                    <i style="color: #FFFFFF;" class="fa-solid fa-arrow-trend-up"></i>
                                </div>
                            </div>
                            <div class="mx-4">
                                <p class="card-text"> {{ $bs->siswa_id }}</p>
                            </div>
                            <div class="mx-4">
                                <div  style="display: flex; flex-direction: column;">
                                    
                                    <span class="card-text">{{ $bs->tanggal_pembayaran }}</span>
                                </div>
                               
                            </div>
                            <div class="mx-4">
                                <p class="card-text"> Rp {{ $bs->nominal }}</p>
                            </div>
                            <div class="mx-4">
                                <p class="card-text">{{ $bs->jenis_biaya }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                   
                </div>
            </div>
        </div>
    </div> --}}
      
</div>

 
@endsection