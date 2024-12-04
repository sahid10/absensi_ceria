<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use PDF; // Untuk PDF
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use Maatwebsite\Excel\Facades\Excel; // Untuk Excel
// use PhpOffice\PhpWord\PhpWord; // Untuk Word
// use PhpOffice\PhpWord\IOFactory;


class PegawaiController extends Controller
{
    public function index()
    {
        // Ambil semua data Pegawai dari tabel
        $Pegawai = Pegawai::all();

        // Kirim data ke view
        return view('Pegawai.Pegawai_index', ['Pegawai' => $Pegawai]);
    }

    public function downloadPdf()
    {
        $Pegawai = Pegawai::all(); // Ambil data pegawai
        $pdf = PDF::loadView('Pegawai.pdf', compact('Pegawai')); // Buat file PDF menggunakan view
        return $pdf->download('Pegawai.pdf'); // Kirim file ke user
    }
}

