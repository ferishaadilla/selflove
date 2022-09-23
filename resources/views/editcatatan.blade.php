@extends('layout.main')
@section('content') 
<div class="container-fluid">
    <div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Isi Catatan Perjalanan</a></li>
		</ol>
    </div>
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Data</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="/updatedata/{{ $data->id }}" method="post">
                @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" value="{{$data->tanggal}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Waktu</label>
                            <input type="text" name="waktu" class="form-control" value="{{$data->waktu}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Lokasi</label>
                            <input type="text" name="lokasi" class="form-control" value="{{$data->lokasi}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Suhu Tubuh</label>
                            <input type="text" name="suhu" class="form-control" value="{{$data->suhu}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Catatan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection