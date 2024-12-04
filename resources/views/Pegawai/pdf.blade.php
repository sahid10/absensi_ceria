<head>
    <title>Daftar Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
<h1>Daftar Pegawai</h1>
<table>
    <thead>
        
        <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Status</th>
            <th>Alamat</th>
            <th>Jabatan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Pegawai as $index => $Pegawai)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $Pegawai->pegawai_nama?? '-' }}</td>
                <td>{{ $Pegawai->pegawai_status?? '-' }}</td>
                <td>{{ $Pegawai->alamat?? '-' }}</td>
                <td>{{ $Pegawai->jabatan?? '-' }}</td>
            </tr>
        @endforeach


    </tbody>
</table>
