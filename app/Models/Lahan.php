<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'pangkat',
        'sertifikat',
        'ajb',
        'lokasi',
        'kwitansi',
        'luas',
        'status',
        'tgl_jb',
        'jualdari',
        'jenis_tanah',
        'jenis_tanam',
        'pemilik_tanam',
        'petani',
        'diatas',
        'kemiringan'
    ];
}