@extends('template')
@section('content')
<div class="container">
    <h2>Absensi</h2>

    <!-- Tambahkan DataTables CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/2.1.7/css/dataTables.semanticui.css">
    
   
    <table id="absensiTable" class="table table-striped">
        <thead>
            <tr>
                <th>Scan Date</th>
                <th>Nama Pegawai</th>
                <th>No. Telp</th>
                <th>Status</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
                <td>{{ $log->scan_date }}</td>
                <td>{{ $log->pegawai_nama }}</td>
                <td>{{ $log->pegawai_telp }}</td>
                <td>{{ $log->pegawai_status }}</td>
                <td>{{ $log->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

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