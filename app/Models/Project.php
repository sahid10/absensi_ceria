<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

// Tentukan tabel yang digunakan oleh model
protected $table = 'projects';

// Tentukan field yang boleh diisi (mass assignable)
protected $fillable = [
    'tanggal',
    'jam_berangkat',
    'jenis_kontrak_kerja',
    'nama_project',
    'nama_leader',
    'wilayah_ulp_terkait',
    'nama_personil',
    'total_jumlah_personil'
];

// Tentukan jika ada relasi dengan model lain
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'nama_personel', 'pegawai_id');
    }

    public function leader()
    {
        return $this->belongsTo(Pegawai::class, 'nama_leader', 'pegawai_id');
    }
}

