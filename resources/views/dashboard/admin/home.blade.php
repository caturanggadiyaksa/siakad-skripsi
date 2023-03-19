<!-- Menghubungkan dengan view template master -->
@extends('dashboard.admin.master')
 

 

@section('konten')
<div class="container-fluid">
	<section class="h-100 gradient-custom-2">
		<div class="container py-5 h-100">
		  <div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col col-lg-8 col-xl-12">
			  <div class="card">
				<div class="rounded-top text-white d-flex flex-row" style="background-color: #4D44B5; height:200px;">
				  <div style="border-radius: 40px;" class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
					<img   src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
					  alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
					  style="width: 150px; z-index: 1; border-radius: 80px;">
					
					
				  </div>
				  
				</div>
				<div class="" style="margin: 2rem 0 0 2rem;" >
					<h5>Andy Horwitz</h5>
					<p>New York</p>
				  </div>
				<div class="p-4 text-black" >
				  <div class="d-flex  text-center py-1">
					<div class="d-flex">
					  <p class="mb-1 h5">253</p>
					  <p class="small text-muted mb-0">Photos</p>
					</div>
					<div class="px-3 d-flex">
					  <p class="mb-1 h5">1026</p>
					  <p class="small text-muted mb-0">Followers</p>
					</div>
					<div class="d-flex">
					  <p class="mb-1 h5">478</p>
					  <p class="small text-muted mb-0">Following</p>
					</div>
				  </div>
				</div>
				<div class="card-body p-4 text-black">
				  <div class="mb-5">
					<p class="lead fw-normal mb-1">About</p>
					<div class="p-4" style="background-color: #f8f9fa;">
					  <p class="font-italic mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe tempora, necessitatibus molestias itaque, similique cupiditate corrupti debitis minus, ut illum vero a consectetur ad laudantium aliquid voluptatum totam. Reprehenderit, eum.</p>
					  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, est iste eligendi quaerat facere asperiores dolore, corporis impedit eos temporibus, aperiam laudantium illo. Doloribus in atque ea laborum modi dolorem.</p>
					  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate enim, laudantium temporibus veritatis placeat nemo quos porro quod ipsam fuga eaque sequi accusantium eos molestiae consequuntur vitae eum labore modi?</p>
					 
					</div>
				  </div>
				  <div class="mb-2">
					<p class="lead fw-normal mb-1">Education</p>
					<div class="p-4" style="background-color: #f8f9fa;">
					  <ul>
						<li>
							<p>name</p>
							<span>tes</span>
						</li>
						
						<li>
							<p>point 2</p>
						</li>
					  </ul>
					</div>
					<div class="mb-2">
						<p class="lead fw-normal mb-1">Education</p>
						<div class="p-4" style="background-color: #f8f9fa;">
						  
						</div>
				  </div>
	
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</section>
</div>


@endsection