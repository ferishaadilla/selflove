@extends('layout.main')
@section('content')
<div class="container-fluid">
	<div class="col-md-12 grid-margin mb-5">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h1 class="font-weight-bold">Welcome {{auth()->user()->name}} !</h1>
            </div>
        </div>
    </div>
	@if (auth()->user()->role == 'admin')
	<div class="row d-flex">
		<div class="col-6">
			<div class="widget-stat card bg-primary">
				<div class="card-body  p-4">
					<div class="media">
						<span class="mr-3">
							<i class="flaticon-381-note"></i>
						</span>
						<div class="media-body text-white">
							<p class="mb-1">Total Catatan</p>
							<h3 class="text-white">{{$jumlahcatatan}} Catatan</h3>
							<div class="progress mb-2 mt-4 bg-secondary">
								<div class="progress-bar progress-animated bg-light" style="width: {{$jumlahcatatan}}%"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="widget-stat card bg-primary">
				<div class="card-body  p-4">
					<div class="media">
						<span class="mr-3">
							<i class="flaticon-381-user"></i>
						</span>
						<div class="media-body text-white">
							<p class="mb-1">Total User</p>
							<h3 class="text-white">{{$datauser}} User</h3>
							<div class="progress mb-2 mt-4 bg-secondary">
								<div class="progress-bar progress-animated bg-light" style="width: {{$datauser}}%"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
	<div class="row">
		<div class="col-xl-6 col-xxl-12">
			<div class="card">
				<div class="card-header d-sm-flex d-block pb-0 border-0">
				<div class="col-lg-12">
					<div class="card avtivity-card">
						<div class="card-body">
							<div class="media align-items-center">
								<span class="activity-icon bgl-warning  mr-md-4 mr-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database" fill="#FFBC11"><ellipse cx="12" cy="5" rx="9" ry="3"  fill="#FFBC11"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" fill="#FFBC11"></path></svg>
									
								</span>
								<div class="media-body">
									<h1 class="fs-14 mb-2">Catatan Perjalanan</h1>
									<span class="title text-black font-w600">Catatan Perjalanan</span>
								</div>
								<a type="button" href="/catatan" class="btn btn-primary">Lihat Catatan</a>
							</div>
							<div class="progress" style="height:5px;">
								<div class="progress-bar bg-warning" style="width: 100%; height:5px;" role="progressbar">
								</div>
							</div>
						</div>
						<div class="effect bg-warning"></div>
					</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	@if (auth()->user()->role == 'admin')
	<div class="row">
		<div class="col-xl-6 col-xxl-12">
			<div class="card">
				<div class="card-header d-sm-flex d-block pb-0 border-0">
				<div class="col-lg-12">
					<div class="card avtivity-card">
						<div class="card-body">
							<div class="media align-items-center">
								<span class="activity-icon bgl-warning  mr-md-4 mr-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database" fill="#FFBC11"><ellipse cx="12" cy="5" rx="9" ry="3"  fill="#FFBC11"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" fill="#FFBC11"></path></svg>
									
								</span>
								<div class="media-body">
									<h1 class="fs-14 mb-2">Catatan Perjalanan</h1>
									<span class="title text-black font-w600">Data User</span>
								</div>
								<a type="button" href="/datauser" class="btn btn-primary">Lihat Data</a>
							</div>
							<div class="progress" style="height:5px;">
								<div class="progress-bar bg-warning" style="width: 100%; height:5px;" role="progressbar">
								</div>
							</div>
						</div>
						<div class="effect bg-warning"></div>
					</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	@endif
	@if (auth()->user()->role == 'user')
	<div class="row">
		<div class="col-xl-6 col-xxl-12">
			<div class="card">
				<div class="card-header d-sm-flex d-block pb-0 border-0">
				<div class="col-lg-12">
					<div class="card avtivity-card">
						<div class="card-body">
							<div class="media align-items-center">
								<span class="activity-icon bgl-warning  mr-md-4 mr-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool" fill="#FFBC11"><path d="M12 19l7-7 3 3-7 7-3-3z" fill="#FFBC11"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" fill="#FFBC11"></path><path d="M2 2l7.586 7.586" fill="#FFBC11"></path><circle cx="11" cy="11" r="2"fill="#FFBC11"></circle></svg>
								</span>
								<div class="media-body">
									<h1 class="fs-14 mb-2">Catatan Perjalanan</h1>
									<span class="title text-black font-w600">Isi Data Catatan Perjalanan</span>
								</div>
								<a type="button" href="/isicatatan" class="btn btn-primary">Isi Catatan</a>
							</div>
							<div class="progress" style="height:5px;">
								<div class="progress-bar bg-warning" style="width: 100%; height:5px;" role="progressbar">
								</div>
							</div>
						</div>
						<div class="effect bg-warning"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
</div>
@endsection