@extends('template')
@section('content')
    
<head>
    <title>Input Project</title>
</head>
<body>
<div class="container-fluid py-5">
    <div class="row">
        <div class="col-md-8">
    <div class="card z-index ">
        <div class="card-header position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Input Data Project</h6>
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
            <form action="{{ route('projects.store') }}" method="POST" >
                @csrf
                    <div class="col-md-auto">
                        <div class="input-group input-group-lg input-group-outline my-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control form-control-lg" name="tanggal">
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="input-group input-group-lg input-group-outline my-3">
                            <label class="form-label">Jam Berangkat</label>
                            <input type="time" class="form-control form-control-lg" name="jam_berangkat">
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="input-group input-group-lg input-group-outline my-3">
                            <label class="form-label">jenis kontrak kerja</label>
                            <input type="text" class="form-control form-control-lg" name="jenis_kontrak_kerja">
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="input-group input-group-lg input-group-outline my-3">
                            <label class="form-label">Nama Project</label>
                            <input type="text" class="form-control form-control-lg" name="nama_project">
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="input-group input-group-lg input-group-outline my-3">
                            <label class="form-label">Nama Leader</label>
                            <input type="text" class="form-control form-control-lg" name="nama_leader">
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="input-group input-group-lg input-group-outline my-3">
                            <label class="form-label">Wilayah ULP Terkait</label>
                            <input type="text" class="form-control form-control-lg" name="wilayah_ulp_terkait">
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="input-group input-group-lg input-group-outline my-3">
                            <label class="form-label">Nama Personil</label>
                            <input type="text" class="form-control form-control-lg" name="nama_personil">
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="input-group input-group-lg input-group-outline my-3">
                            <label class="form-label">Total Jumlah Personil</label>
                            <input type="number" class="form-control form-control-lg" name="total_jumlah_personil">
                        </div>
                    </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    </div>
  <!-- end content -->
  @endsection