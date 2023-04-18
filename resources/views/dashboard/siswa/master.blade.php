<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
        rel="stylesheet"
        />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     
        <link rel="stylesheet" href="style.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css"
      >
    
        <link rel="stylesheet" href="{{ asset('style.css') }}">
    </head>
<body>
  <div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
      
    
<div class="sidebar-content">
  <div class="sidebar-brand">
    <a href="#">Akademi</a>
    <div id="close-sidebar">
      <i class="fas fa-times"></i>
    </div>
  </div>
  

<div class="sidebar-menu">
  <ul>
    <li>
      <h3> @yield('judul_halaman') </h3>
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
      </a>
      <div class=" " aria-labelledby="">
        <a class="" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
    
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    </li>
    <li class="">
      <a href="/dashboard">
        <i class="fa-regular fa-house fa-lg"></i>
        <span>Dashboard</span>
      
      </a>
      
    </li>
    <li class="">
      <a href="/jadwal">
        <i class="fa-regular fa-money-check-dollar-pen fa-lg"></i>
        <span>Jadwal</span>
      
      </a>
      
    </li>
    <li class="">
      <a href="/pengumuman/siswa">
        <i class="fa-regular fa-bullhorn fa-lg"></i>
        <span>Pengumuman</span>
      
      </a>
      
    </li>
  
    <li class="">
      <a href="/siswa">
        <i class="fa-regular fa-user-graduate fa-lg"></i>
        <span>Siswa</span>
      
      </a>
      
    </li>
    <li class="">
      <a href="/absen">
        <i class="fa-regular fa-user-tie fa-lg"></i>
        <span>Absen</span>
      
      </a>
      
    </li>
    <li class="">
        <a href="/tugas">
          <i class="fa-regular fa-user-tie fa-lg"></i>
          <span>Tugas</span>
        
        </a>
        
      </li>
      <li class="">
        <a href="/nilai">
          <i class="fa-regular fa-user-tie fa-lg"></i>
          <span>Nilai</span>
        
        </a>
        
      </li>
       <li class="">
      <a href="/jadwal">
        <i class="fa-regular fa-messages fa-lg"></i>
        <span>jadwal</span>
      
      </a>
      
    </li>
    <li class="">
      <a href="/chat">
        <i class="fa-regular fa-messages fa-lg"></i>
        <span>Chat</span>
      
      </a>
      
    </li>
  
   
  </ul>
</div>
<!-- sidebar-menu  -->
</div>
      
    </nav>
    <!-- sidebar-wrapper  -->


    <div class="nav-atas pt-2">
      <div class="col-12  d-flex justify-content-between align-items-center">
        <div class="row">
          <h3 class="m-0" style="color: #303972;">{{ $title }}</h3>
         
        </div>
        
        
        
        <div class="d-flex justify-content-between align-items-center" >
          {{-- <div class="col-6" style="">
            <div class="input-group" >
              <button style="background-color: #f5f4f4ef; border-radius: 20px 0 0 20px;" class=" border-0 px-3" type="button">
                <i style="color:#4D44B5;" class="far fa-search"></i>
              </button>
              <input style="background-color: #f5f4f4ef; border-radius: 0 20px 20px 0;" type="text" class="form-control border-0" placeholder="Cari" aria-label="Cari" aria-describedby="basic-addon2">
            
            </div>
          </div> --}}
          <i class="far fa-gear fa-lg mr-3"></i>
          <i class="far fa-bell fa-lg mr-3"></i>
          <div class="ml-3">
            <p style="color: #303972;" class="m-0">{{ Auth::user()->name }}</p>
            <span style="color: #A098AE;" class="m-0">{{ Auth::user()->role }}</span>
          </div>
          <div class="profil"></div>
        </div>
      </div>
    </div>
    
    <main class="page-content">
      
        
      
        @yield('content-siswa')

        
     
    </main>
  </div>

	

 
 
 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>

  <script>
      jQuery(function ($) {

$(".sidebar-dropdown > a").click(function() {
$(".sidebar-submenu").slideUp(200);
if (
$(this)
.parent()
.hasClass("active")
) {
$(".sidebar-dropdown").removeClass("active");
$(this)
.parent()
.removeClass("active");
} else {
$(".sidebar-dropdown").removeClass("active");
$(this)
.next(".sidebar-submenu")
.slideDown(200);
$(this)
.parent()
.addClass("active");
}
});

$("#close-sidebar").click(function() {
$(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
$(".page-wrapper").addClass("toggled");
});




});
  </script>
</body>
</html>