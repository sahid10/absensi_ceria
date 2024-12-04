@extends('template')
@section('content')
 <!-- Tambahkan DataTables CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.css">
 <link rel="stylesheet" href=" https://cdn.datatables.net/2.1.7/css/dataTables.semanticui.css">

 <!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- content -->
<div class="container-fluid py-4">
  <h2>Daftar Project</h2>

  <!-- Tombol untuk menambah project baru -->
  <a href="{{ route('projects.create') }}">
        <button type="submit" class="btn btn-primary">Tambah Project</button>
  </a>
  
  @if (session('success'))
  <script>
      Swal.fire({
          icon: 'success',
          title: 'Success',
          text: '{{ session('success') }}',
          showConfirmButton: true,
          timer: 3000
      });
  </script>
  @endif

@if (session('cancel'))
  <script>
      Swal.fire({
          icon: 'error',
          title: 'Cancelled',
          text: '{{ session('cancel') }}',
          showConfirmButton: true
      });
  </script>
@endif

    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Projects table</h6>
              </div>
              <table id="projectTable" class="table table-striped">
                  <thead>
                      <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jam</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis Kontrak</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Project</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Leader</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Wilayah</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Personil</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">jml Personil</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($projects as $index=>$project)
                  <tr>
                    <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $index + 1 }}</td> <!-- Menampilkan nomor urut -->
                    <td class="text-xs font-weight-bold mb-0">{{ $project->tanggal }}</td>
                    <td class="text-xs font-weight-bold mb-0">{{ $project->jam_berangkat }}</td>
                    <td class="text-xs font-weight-bold mb-0">{{ $project->jenis_kontrak_kerja }}</td>
                    <td class="text-xs font-weight-bold mb-0">{{ $project->nama_project }}</td>
                    <td class="text-xs font-weight-bold mb-0">{{ $project->nama_leader }}</td>
                    <td class="text-xs font-weight-bold mb-0">{{ $project->wilayah_ulp_terkait }}</td>
                    <td class="text-xs font-weight-bold mb-0">{{ $project->nama_personil }}</td>
                    <td class="text-center text-xs font-weight-bold mb-0">{{ $project->total_jumlah_personil }}</td>
                    <td class="text-xs font-weight-bold mb-0">
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
  </div>
  <!-- Tambahkan DataTables JS -->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.js"></script>
  <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.1.7/js/dataTables.semanticui.js"></script>

<script>
$(document).ready(function() {
  $.fn.dataTable.ext.errMode = 'none';
  $.fn.dataTable.defaults.autoWidth = false;
    $('#projectTable').DataTable({
        "pageLength": 10 // Menampilkan 10 data per halaman
    });
});
</script>

@endsection