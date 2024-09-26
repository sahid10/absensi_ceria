<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        // Ambil semua data Pegawai dari tabel
        $Pegawai = Pegawai::all();

        // Kirim data ke view
        return view('Pegawai.Pegawai_index', compact('Pegawai'));
    }
}
