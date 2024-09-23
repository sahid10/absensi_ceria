@extends('template')
@section('content')
    

<!-- content -->
<div class="container-fluid py-4">
<h2>Daftar Karyawan</h2>

  <!-- Tombol untuk menambah karyawan baru -->
  
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
                <h6 class="text-white text-capitalize ps-3">Karyawan table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Nama Pegawai</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Alamat</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Jabatan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Aksi</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                @foreach($karyawans as $index => $karyawan)
                <tr>
                    <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $index + 1 }}</td> <!-- Menampilkan nomor urut -->
                    <td class="text-xs text-secondary opacity-7 mb-0">{{ $karyawan->pegawai_nama?? '-' }}</td>
                    <td class="text-xs text-center text-secondary opacity-7 mb-0">{{ $karyawan->pegawai_status?? '-' }}</td>
                    <td class="text-xs text-secondary opacity-7 mb-0">{{ $karyawan->alamat?? '-' }}</td>
                    <td class="text-xs text-secondary opacity-7 mb-0">{{ $karyawan->jabatan?? '-' }}</td>
                    <td class="text-xs text-center text-secondary opacity-7 mb-0">
                    <!-- Button Aksi Edit -->
                       
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
<br>


  </div>
  <!-- end content -->
  @endsection