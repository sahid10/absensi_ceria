<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $connection = 'workbench'; 
    // Tentukan tabel yang digunakan jika tidak mengikuti konvensi nama tabel
    protected $table = 'pegawai';

    // Tentukan kolom yang dapat diisi
    protected $fillable = ['pegawai_nama', 'pegawai_status', 'alamat', 'jabatan'];
}
