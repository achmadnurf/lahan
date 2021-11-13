<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;
    public $table = "tanamans";
    protected $fillable = [
        'lokasi',
        'jenis_tanah',
        'jenis_tanaman',
        'pemilik_tanaman',
        'petani_penggarap',
        'lintang_selatan',
        'bujur_timur',
    ];
}
