<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    public function index()
    {
        
        $logs = DB::connection('workbench')
            ->table('att_log')
            ->join('pegawai', 'att_log.pin', '=', 'pegawai.pegawai_pin')
            ->select('att_log.scan_date', 'pegawai.pegawai_nama', 'pegawai.pegawai_telp', 'pegawai.pegawai_status', 'pegawai.alamat')
            ->orderBy('att_log.scan_date', 'desc') // Urutkan berdasarkan scan_date terbaru
            ->limit(10) // Ambil 10 data terbaru
            ->get();

        return view('Absensi.Absensi_index', ['logs' => $logs]);
    }
}
