@extends('template')
@section('content')
    

<!-- content -->
<div class="container-fluid py-4">
<h2>Daftar Project</h2>

  <!-- Tombol untuk menambah project baru -->
  <a href="{{ route('projects.create') }}">
        <button type="submit" class="btn btn-primary">Tambah Project</button>
    </a>
    @if (session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Projects table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">jam_berangkat</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jenis_kontrak_kerja</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama_project</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama_leader</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">wilayah_ulp_terkait</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama_personil</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">total_jumlah_personil</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($projects as $project)
                  <tr>
                    <td class="text-center align-middle">{{ $project->tanggal }}</td>
                    <td class="text-center align-middle">{{ $project->jam_berangkat }}</td>
                    <td class="text-center align-middle">{{ $project->jenis_kontrak_kerja }}</td>
                    <td class="text-center align-middle">{{ $project->nama_project }}</td>
                    <td class="text-center align-middle">{{ $project->nama_leader }}</td>
                    <td class="text-center align-middle">{{ $project->wilayah_ulp_terkait }}</td>
                    <td class="text-center align-middle">{{ $project->nama_personil }}</td>
                    <td class="text-center align-middle">{{ $project->total_jumlah_personil }}</td>
                    <td class="text-center">
                    <!-- Button Aksi Edit -->
                    <a href="{{ route('projects.send_wa', $project->id) }}" class="btn btn-primary btn-sm">
        Kirim WA
    </a></td>
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
<br></br>
<form action="{{ route('send.whatsapp.notification') }}" method="POST">
  @csrf
  <button type="submit" class="btn btn-primary">Kirim Notifikasi Group</button>
</form>


  </div>
  <!-- end content -->
  @endsection