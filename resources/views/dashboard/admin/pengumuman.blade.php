@extends('dashboard.admin.master')
 

@section('konten')

<div class="container-fluid">
   <div class="row">
        <div class="col-8 card" style="min-height: 85vh; border-radius: 20px;">
            {{-- <div class="card"></div> --}}
            <div class="d-flex justify-content-center align-items-center" style="width: 150px; height: 40px; border-radius: 40px; padding: 6px 15px; background: #4D44B5; ">
                <button style="border: none; background-color: transparent; color: #FFFFFF;">
                    <i class="fa-regular fa-plus"></i>
                   <span>Add New</span>
                </button>
            </div>

            <div class="container mt-4">
                <div class="card mt-4" style=" border-radius: 20px; height: 8rem;">
                   <div class="col-12 " style="border-radius: 20px; ">
                        <div class="row">
                            <div class="" style="width: 8%; height: 8rem; border-radius: 20px 0 0 20px; background-color:#4D44B5;">
                              
                            </div>
                            <div class="" style=" width: 92%; height: 8rem; border-radius: 0 20px 20px 0;"">
                                <div class="row" style="">
                                   
                                    <div id="pengumuman" class="col-7 d-flex align-items-center">
                                        <div class="px-2" style="margin: 0;">
                                            <div class="col">
                                                <h6 style="color: #303972;" class="m-0">Pengumuman Pembayaran</h6>
                                                <span style="color: #A098AE;" class="m-0">Pembayaran</span>
                                            </div>
                                            <div class="col">
                                                <p style="color: #303972;" class="m-0">March 20, 2023</p>
                                                <span style="color: #A098AE;" class="m-0">19.00 - 20.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id="btn-pengumuman" class="col-4 d-flex justify-content-center align-items-center" style="height: 8rem;">
                                        <div>
                                            <div class="d-flex justify-content-center align-items-center" style="width: 100px; height: 40px; border-radius: 40px; padding: 6px 15px; background: #4D44B5;">
                                                <button style="border: none; background-color: transparent; color: #FFFFFF;" class="align-items-center">
                                                    <span>View</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
                
                
                <div class="card mt-4" style="background-color: #F3F4FF; border-radius: 20px; height: 8rem;">
                    <h1>tes</h1>
                </div>
            </div>
        </div>
        <div class="col-4 card" style="min-height: 85vh;">
            {{-- <div class="card"></div> --}}
        </div>
   </div>
</div>
 
@endsection