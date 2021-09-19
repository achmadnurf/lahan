<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kredit extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pinjam',
        'jangka_waktu',
        'jumlah',
        'mdpl',
        'lahan_id',
        'validasi',
        'authorisasi'
    ];

    protected $with = ['lahan'];

    public function lahan(): BelongsTo
    {
        return $this->belongsTo(Lahan::class);
    }
}
