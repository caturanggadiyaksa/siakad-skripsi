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
      <!---- Datatables ----->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

      <!--- Jquery ----->
      {{-- <script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script> --}}

    </head>
<body>
  <div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
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
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
      </a>
      <div class="sidebar-content">
        <div class="sidebar-brand">
          <a href="#">Akademi</a>
          <div id="close-sidebar">
            <i class="fas fa-times"></i>
          </div>
        </div>
        
      
      <div class="sidebar-menu">
        <ul>
          
          <li class="">
            <a href="/dashboard">
              <i class="fa-regular fa-house fa-lg"></i>
              <span>Dashboard</span>
            
            </a>
            
          </li>
          <li class="">
            <a href="/keuangan">
              <i class="fa-regular fa-money-check-dollar-pen fa-lg"></i>
              <span>Keuangan</span>
            
            </a>
            
          </li>
          <li class="">
            <a href="/pengumuman">
              <i class="fa-regular fa-bullhorn fa-lg"></i>
              <span>Pengumuman</span>
            
            </a>
            
          </li>
          <li class="">
            <a href="/akses">
              <i class="fa-regular fa-user fa-lg"></i>
              <span>Manajemen Akses</span>
            
            </a>
            
          </li>
          <li class="">
            <a href="/siswa">
              <i class="fa-regular fa-user-graduate fa-lg"></i>
              <span>Siswa</span>
            
            </a>
            
          </li>
          <li class="">
            <a href="/guru">
              <i class="fa-regular fa-user-tie fa-lg"></i>
              <span>Guru</span>
            
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
            <p style="color: #303972;" class="m-0"> {{ Auth::user()->name }}</p>
            <span style="color: #A098AE;" class="m-0"> {{ Auth::user()->role }}</span>
          </div>
          <div class="profil"></div>
        </div>
      </div>
    </div>
    
    {{-- <div class="nav-atas">
      <div class="col-12 bg-danger" >
        <div class="row">
          <h3>Dashboard</h3>
          <div>
            <h5>Ahmad</h5>
            <span>guru</span>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">
              <i class="fa-regular fa-magnifying-glass"></i>
            </button>
          </div>
          <input type="text" class="form-control" placeholder="Cari" aria-label="Cari" aria-describedby="basic-addon2">
          
        </div>
        
        <i class="fa-regular fa-gear fa-lg"></i>
        <i class="fa-regular fa-bell fa-lg"></i>
        <div class="profil">

        </div>
      </div>
    
    </div> --}}
    <main class="page-content" style="background-color: F3F4FF;">
      
      
     
      
        @yield('konten')
   
    </main>
  </div>

	

 
 
 

  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();
    });
  </script>
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