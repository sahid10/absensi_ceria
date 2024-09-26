<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Att_log extends Model
{
    use HasFactory;

    protected $connection = 'workbench';  // Koneksi ke database kedua
    protected $table = 'att_log'; 
}
