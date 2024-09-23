<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        // Ambil semua data karyawan dari tabel
        $karyawans = Karyawan::all();

        // Kirim data ke view
        return view('karyawan.karyawan_index', compact('karyawans'));
    }
}
