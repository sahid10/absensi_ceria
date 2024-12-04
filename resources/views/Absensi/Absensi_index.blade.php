@extends('template')
@section('content')
<div class="container">

    <!-- Tambahkan DataTables CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/2.1.7/css/dataTables.semanticui.css">
    
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Absensi table</h6>
                </div>
                <table id="absensiTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">No</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Scan Date</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Nama Pegawai</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">No. Telp</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $index => $log)
                        <tr>
                            <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $index + 1 }}</td> <!-- Menampilkan nomor urut -->
                            <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $log->scan_date }}</td>
                            <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $log->pegawai_nama }}</td>
                            <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $log->pegawai_telp }}</td>
                            <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $log->pegawai_status }}</td>
                            <td class="text-xs text-center text-secondary opacity-7 mb-2">{{ $log->alamat }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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


   


    <!-- Inisialisasi DataTables -->
    <script>
        $(document).ready(function() {
            $('#absensiTable').DataTable({
                "pageLength": 10, // Menampilkan 10 data per halaman
                "order": [[0, "desc"]] // Urutkan berdasarkan kolom Scan Date secara descending
            });
        });
    </script>
</div>
@endsection