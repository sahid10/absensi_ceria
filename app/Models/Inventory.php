<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    // Menentukan field yang bisa diisi (mass assignable)
    protected $fillable = [
        'name', 'quantity', 'category', 'price'
    ];
}
