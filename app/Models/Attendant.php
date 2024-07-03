<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendant extends Model
{
    use HasFactory;

    protected $table = 'attendant'; // Menentukan nama tabel secara eksplisit

    protected $fillable = [
        'date', 'checkintime', 'checkouttime', 'status', 'notes'
    ];
    /**
     * Get the user that owns the attendant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
