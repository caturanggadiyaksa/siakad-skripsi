<!-- Menghubungkan dengan view template master -->
@extends('dashboard.admin.master')
 

@section('konten')

<div class="container-fluid">
    <div class="row">
        <div style="min-height: 85vh;" class="col-4 card ">
            <div>
                <h3>Messages</h3>
            </div>
            <div class="" style="border: 2px solid #A098AE; border-radius: 40px;">
                <div class="input-group" >
                  <button style="background-color: #FFFFFF; border-radius: 20px 0 0 20px;" class=" border-0 px-3" type="button">
                    <i style="color:#4D44B5;" class="far fa-search"></i>
                  </button>
                  <input style="background-color: #FFFFFF; border-radius: 0 20px 20px 0;" type="text" class="form-control border-0" placeholder="Cari" aria-label="Cari" aria-describedby="basic-addon2">
                
                </div>
            </div>
            <div class="mt-3">
                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle" style="width: 35px; height: 35px; background-color:#A098AE;"></div>
                        <div class="ml-3">
                            <h6 style="color: #303972;" class="m-0">Shinta</h6>
                            <span style="color: #A098AE;" class="m-0">Lorem ipsum do</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="row text-right">
                            <span style="color: #A098AE;" class="m-0">12.00</span>
                            {{-- <span style="color: #A098AE;" class="m-0">2</span> --}}
                        </div>
                           
                        
                    </div>
                    {{-- <div class="d-flex justify-content-end bg-danger">
                       
                    </div> --}}
                </div>
                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle" style="width: 35px; height: 35px; background-color:#A098AE;"></div>
                        <div class="ml-3">
                            <h6 style="color: #303972;" class="m-0">Shinta</h6>
                            <span style="color: #A098AE;" class="m-0">Lorem ipsum do</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="row text-right">
                            <span style="color: #A098AE;" class="m-0">12.00</span>
                            {{-- <span style="color: #A098AE;" class="m-0">2</span> --}}
                        </div>
                           
                        
                    </div>
                    {{-- <div class="d-flex justify-content-end bg-danger">
                       
                    </div> --}}
                </div>


                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle" style="width: 35px; height: 35px; background-color:#A098AE;"></div>
                        <div class="ml-3">
                            <h6 style="color: #303972;" class="m-0">Shinta</h6>
                            <span style="color: #A098AE;" class="m-0">Lorem ipsum do</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="row text-right">
                            <span style="color: #A098AE;" class="m-0">12.00</span>
                            {{-- <span style="color: #A098AE;" class="m-0">2</span> --}}
                        </div>
                           
                        
                    </div>
                    {{-- <div class="d-flex justify-content-end bg-danger">
                       
                    </div> --}}
                </div>


                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle" style="width: 35px; height: 35px; background-color:#A098AE;"></div>
                        <div class="ml-3">
                            <h6 style="color: #303972;" class="m-0">Shinta</h6>
                            <span style="color: #A098AE;" class="m-0">Lorem ipsum do</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="row text-right">
                            <span style="color: #A098AE;" class="m-0">12.00</span>
                            {{-- <span style="color: #A098AE;" class="m-0">2</span> --}}
                        </div>
                           
                        
                    </div>
                    {{-- <div class="d-flex justify-content-end bg-danger">
                       
                    </div> --}}
                </div>


                <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle" style="width: 35px; height: 35px; background-color:#A098AE;"></div>
                        <div class="ml-3">
                            <h6 style="color: #303972;" class="m-0">Shinta</h6>
                            <span style="color: #A098AE;" class="m-0">Lorem ipsum do</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="row text-right">
                            <span style="color: #A098AE;" class="m-0">12.00</span>
                            {{-- <span style="color: #A098AE;" class="m-0">2</span> --}}
                        </div>
                           
                        
                    </div>
                    {{-- <div class="d-flex justify-content-end bg-danger">
                       
                    </div> --}}
                </div>
           
                
            </div>
        </div>
        <div style="min-height: 85vh;" class="col-8 card">
            <div>
                <div class="row">
                    <div class="col-12" style="height: 10vh;">
                        <div id="one" class="d-flex justify-content-between align-items-center border-bottom border-bottom-primary">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="rounded-circle" style="width: 35px; height: 35px; background-color:#A098AE;"></div>
                                <div class="ml-3">
                                   
                                    <p style="color: #303972;" class="m-0">{{ Auth::user()->name }}</p>
                                    <span style="color: #A098AE;" class="m-0">{{ Auth::user()->role }}</span>
                                </div>
                            </div>
                            <div>
                                <h1>tes</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12" style="height: 55vh;">
                        <div id="two">
                
                            <div class="row d-flex justify-content-end m-2">
                                <div class="col-md-8 col-lg-8 d-flex justify-content-end">
                                    <div class="rounded p-2" style="color: #ffffff;background-color: #4D44B5; display: inline-block; word-wrap: break-word;">
                                        <p class="m-0">lorem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-start align-items-center m-2">
                                <div class="col-md-8 col-lg-8 d-flex justify-content-start">
                                    <div class="rounded p-2" style="background-color: #F5F5F5; display: inline-block; word-wrap: break-word;">
                                        <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus recusandae voluptas dolorem adipisci assumenda voluptatum. Earum ipsa esse tempora eum doloremque sed, nostrum eaque magnam adipisci dicta omnis facere minus.</p>
                                    </div>
                                </div>
                            </div>
                        
                            
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="height: 20vh; ">
                        <div id="three" class="mt-4 p-4 border-top border-top-primary" style="">
                            <div class="col-12 p-1" style="border: 2px solid #A098AE; border-radius: 40px;">
                                <div class="input-group" >
                                  
                                    <input style=" border-radius: 20px;" type="text" class="form-control border-0" placeholder="Write your message..." aria-label="Cari" aria-describedby="basic-addon2">
                                    <button style="background-color: #FFFFFF; border-radius: 20px 0 0 20px;" class=" border-0 px-3" type="button">
                                        <i style="color: #A098AE;" class="fa-regular fa-paperclip"></i>
                                    </button>
                                    <button style="color:#FFFFFF; background-color: #4D44B5; border-radius: 20px;" class=" border-0 px-3" type="button">
                                        Send
                                        <i style="color:#FFFFFF;" class="fa-regular fa-paper-plane-top"></i>
                                    </button>
                                  </div>
                            </div>
                            
                        </div> 
                    </div>
                </div>
            </div>
            {{-- <div id="one" class="d-flex justify-content-between align-items-center border-bottom border-bottom-primary">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="rounded-circle" style="width: 35px; height: 35px; background-color:#A098AE;"></div>
                    <div class="ml-3">
                        <p style="color: #303972;" class="m-0">Ahmad</p>
                        <span style="color: #A098AE;" class="m-0">guru</span>
                    </div>
                </div>
                <div>
                    <h1>tes</h1>
                </div>
            </div> 
            
            <div id="two">
                
                <div class="row d-flex justify-content-end m-2">
                    <div class="col-md-8 col-lg-8 d-flex justify-content-end">
                        <div class="rounded p-2" style="color: #ffffff;background-color: #4D44B5; display: inline-block; word-wrap: break-word;">
                            <p class="m-0">lorem</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-start align-items-center m-2">
                    <div class="col-md-8 col-lg-8 d-flex justify-content-start">
                        <div class="rounded p-2" style="background-color: #F5F5F5; display: inline-block; word-wrap: break-word;">
                            <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus recusandae voluptas dolorem adipisci assumenda voluptatum. Earum ipsa esse tempora eum doloremque sed, nostrum eaque magnam adipisci dicta omnis facere minus.</p>
                        </div>
                    </div>
                </div>
            
                
                
               
                  
                
            </div>
            <div id="three" class="mt-4 p-4 border-top border-top-primary" style="">
                <div class="col-12 p-1" style="border: 2px solid #A098AE; border-radius: 40px;">
                    <div class="input-group" >
                      
                        <input style=" border-radius: 20px;" type="text" class="form-control border-0" placeholder="Write your message..." aria-label="Cari" aria-describedby="basic-addon2">
                        <button style="background-color: #FFFFFF; border-radius: 20px 0 0 20px;" class=" border-0 px-3" type="button">
                            <i style="color: #A098AE;" class="fa-regular fa-paperclip"></i>
                        </button>
                        <button style="color:#FFFFFF; background-color: #4D44B5; border-radius: 20px;" class=" border-0 px-3" type="button">
                            Send
                            <i style="color:#FFFFFF;" class="fa-regular fa-paper-plane-top"></i>
                        </button>
                      </div>
                </div>
                
            </div> --}}
        </div>
    </div>
</div>

 
@endsection