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
        
                <a href="/guru/tambah">
                    <div class="d-flex justify-content-center align-items-center" style="width: 150px; height: 40px; border-radius: 40px; padding: 6px 15px; background: #4D44B5; ">
                        <button style="border: none; background-color: transparent; color: #FFFFFF;">
                            <i class="fa-regular fa-plus"></i>
                           <span>Add New</span>
                        </button>
                    </div>
                </a>
                
            </div>
        </div>
    
    </div>


   
    <div class="mt-2">
        <div class="container py-5 ">
            <div class="row justify-content-center align-items-center">
                @foreach ($guru as $g)
                    <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <div class="d-flex justify-content-center align-items-center mt-2 mb-1">
                                    <div class="rounded-circle img-fluid bg-danger" style="width: 100px; height: 100px;">
                                        <img src="" class="rounded-circle img-fluid bg-danger" style="width: 100px;" />
                                    </div>
                                </div>
                                <h6 class="mb-1">{{ $g->nama }}</h6>
                                <p class="text-muted mb-2">Ips</p>
                                <div class="mb-4 pb-2">
                                    <button type="button" class="btn rounded-circle" style="background: #4D44B5; color: #ffffff">
                                        <i class="fa-regular fa-phone fa-sm"></i>
                                    </button>
                                    <button type="button" class="btn rounded-circle" style="background: #4D44B5; color: #ffffff">
                                        <i class="fa-regular fa-envelope fa-sm"></i>
                                    </button>
                                </div>
                                <div class="mb-2 pb-2 gap-2" style="color:#FFFFFF;">
                                    <a style="color:#FFFFFF;" href="/guru/show/{{ $g->id }}" class="bg-primary px-2 py-2 rounded" >
                                        Show
                                    </a>
                                    <a style="color:#FFFFFF;" href="/guru/edit/{{ $g->id }}" class="bg-warning px-2 py-2 mx-2 rounded" >
                                        Edit
                                    </a>
                                    <a style="color:#FFFFFF;" href="/guru/delete/{{ $g->id }}" class="bg-danger px-2 py-2 rounded" >
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (($loop->iteration % 3) == 0)
                        </div><div class="row justify-content-center align-items-center">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    
</div>
 
@endsection