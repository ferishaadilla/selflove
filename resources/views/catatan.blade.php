@extends('layout.main')
@section('content')
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Catatan Perjalanan</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Catatan Perjalanan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="display min-w850 dataTable table table-responsive-md" role="grid" aria-describedby="example_info">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Tanggal</th>
                                                <th>Waktu</th>
                                                <th>Lokasi</th>
                                                <th>Suhu Tubuh</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                            @foreach ($data as $row)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $row->tanggal }}</td>
                                                <td>{{ $row->waktu }}</td>
                                                <td>{{ $row->lokasi }}</td>
                                                <td>{{ $row->suhu }}</td>
                                                <td>
													<div class="d-flex">
														<a href="/editcatatan/{{ $row->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
@endsection