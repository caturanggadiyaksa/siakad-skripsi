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
   
    <div class="row mt-4">
        <div class="row">
            <div class="d-flex align-items-center justify-content-between mb-2 mt-4">
                <div>
                    <div>
                        <h5>Pembayaraan Sekolah</h5>
                    </div>
                </div>
                <div>
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
            <div class="card">
        
                <div class="card-body">
                    <div class="row">
                        {{-- data --}}

                        <div class="my-2 d-flex align-items-center" style="">
                            <div class="mx-4">
                                <div class="d-flex align-items-center justify-content-center" style="background-color: #FF4550; border-radius: 40px; width: 40px; height: 40px;">
                                    <i style="color: #FFFFFF;" class="fa-solid fa-arrow-trend-up"></i>
                                </div>
                            </div>
                            <div class="mx-4">
                                <div  style="display: flex; flex-direction: column;">
                                    <span class="card-text">#232121</span>
                                    <span class="card-text">2 March 2021, 13:45 PM</span>
                                </div>
                               
                            </div>
                            <div class="mx-4">
                                <p class="card-text"> Rp 1.500.000,00</p>
                            </div>
                            <div class="mx-4">
                                <p class="card-text">Completed</p>
                            </div>
                        </div>

                        <div class=" my-2 d-flex align-items-center" style="">
                            <div class="mx-4">
                                <div class="d-flex align-items-center justify-content-center" style="background-color: #FF4550; border-radius: 40px; width: 40px; height: 40px;">
                                    <i style="color: #FFFFFF;" class="fa-solid fa-arrow-trend-up"></i>
                                </div>
                            </div>
                            <div class="mx-4">
                                <div  style="display: flex; flex-direction: column;">
                                    <span class="card-text">#232121</span>
                                    <span class="card-text">2 March 2021, 13:45 PM</span>
                                </div>
                               
                            </div>
                            <div class="mx-4">
                                <p class="card-text"> Rp 1.500.000,00</p>
                            </div>
                            <div class="mx-4">
                                <p class="card-text">Completed</p>
                            </div>
                        </div>


                        <div class="my-2 d-flex align-items-center" style="">
                            <div class="mx-4">
                                <div class="d-flex align-items-center justify-content-center" style="background-color: #FF4550; border-radius: 40px; width: 40px; height: 40px;">
                                    <i style="color: #FFFFFF;" class="fa-solid fa-arrow-trend-up"></i>
                                </div>
                            </div>
                            <div class="mx-4">
                                <div  style="display: flex; flex-direction: column;">
                                    <span class="card-text">#232121</span>
                                    <span class="card-text">2 March 2021, 13:45 PM</span>
                                </div>
                               
                            </div>
                            <div class="mx-4">
                                <p class="card-text"> Rp 1.500.000,00</p>
                            </div>
                            <div class="mx-4">
                                <p class="card-text">Completed</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
  

    <div class="row mt-4">
        <div class="row">
            <div class="d-flex align-items-center justify-content-between mb-2 mt-4">
                <div>
                    <div>
                        <h5>Pembayaraan</h5>
                    </div>
                </div>
                <div>
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
            <div class="card">
        
                <div class="card-body">
                    <div class="row">
                        {{-- data --}}

                        <div class="my-2 d-flex align-items-center" style="">
                            <div class="mx-4">
                                <div class="d-flex align-items-center justify-content-center" style="background-color: #FF4550; border-radius: 40px; width: 40px; height: 40px;">
                                    <i style="color: #FFFFFF;" class="fa-solid fa-arrow-trend-up"></i>
                                </div>
                            </div>
                            <div class="mx-4">
                                <div  style="display: flex; flex-direction: column;">
                                    <span class="card-text">#232121</span>
                                    <span class="card-text">2 March 2021, 13:45 PM</span>
                                </div>
                               
                            </div>
                            <div class="mx-4">
                                <p class="card-text"> Rp 1.500.000,00</p>
                            </div>
                            <div class="mx-4">
                                <p class="card-text">Completed</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
      
</div>

 
@endsection