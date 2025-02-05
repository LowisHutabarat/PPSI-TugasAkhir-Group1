<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumni';

    protected $fillable = [
        'no_alumni',
        'nama_lengkap',
        'ipk',
        'stambuk',
        'tahun_lulus',
        'fakultas',
        'prodi',
        'kerja_dimana',
        'sebagai_apa',
        'durasi_dapat_kerja',
    ];
}
