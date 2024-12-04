<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    public function index()
    {
        $logs = DB::table('fin_pro.att_log') // Mengakses tabel att_log dari database fin_pro
            ->join('fin_pro.pegawai', 'att_log.pin', '=', 'pegawai.pegawai_pin') // Join dengan tabel pegawai di database saat ini (absensi_ceria)
            ->select('att_log.scan_date', 'pegawai.pegawai_nama', 'pegawai.pegawai_telp', 'pegawai.pegawai_status', 'pegawai.alamat')
            ->orderBy('att_log.scan_date', 'desc') // Urutkan berdasarkan scan_date terbaru
        // $logs = DB::connection('workbench')
            // ->table('att_log')
            // ->join('pegawai', 'att_log.pin', '=', 'pegawai.pegawai_pin')
            // ->select('att_log.scan_date', 'pegawai.pegawai_nama', 'pegawai.pegawai_telp', 'pegawai.pegawai_status', 'pegawai.alamat')
            // ->orderBy('att_log.scan_date', 'desc') // Urutkan berdasarkan scan_date terbaru
            ->limit(20) // Ambil 10 data terbaru
            ->get();

        return view('Absensi.Absensi_index', ['logs' => $logs]);
    }
}
