<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan jika tidak mengikuti konvensi nama tabel
    protected $table = 'pegawai';

    // Tentukan kolom yang dapat diisi
    protected $fillable = ['pegawai_nama', 'pegawai_status', 'alamat', 'jabatan'];
}
