@extends('template')
@section('content')
    
<head>
    <title>Input Project</title>
</head>
<body>
<div class="container-fluid py-5">
    <div class="card z-index ">
        <div class="card-header position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Input Data Projecte</h6>
              </div>
            </div>

            @if ($errors->any())
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

    
            <form action="{{ route('projects.store') }}" method="POST" align center >
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static my-2">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal">
                        </div>
                    </div>
                </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-static my-1">
                    <label>Jam Berangkat</label>
                    <input type="time" class="form-control" name="jam_berangkat">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-static my-1">
                    <label>jenis kontrak kerja</label>
                    <input type="text" class="form-control" name="jenis_kontrak_kerja">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-static my-1">
                    <label>Nama Project</label>
                    <input type="text" class="form-control" name="nama_project">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-static my-1">
                    <label>Nama Leader</label>
                    <input type="text" class="form-control" name="nama_leader">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-static my-1">
                    <label>Wilayah ULP Terkait</label>
                    <input type="text" class="form-control" name="wilayah_ulp_terkait">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-static my-1">
                    <label>Nama Personil</label>
                    <input type="text" class="form-control" name="nama_personil">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-static my-1">
                    <label>Total Jumlah Personil</label>
                    <input type="number" class="form-control" name="total_jumlah_personil">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    </div>
  <!-- end content -->
  @endsection