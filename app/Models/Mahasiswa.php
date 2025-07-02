<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nama',
        'nim',
        'alamat',
        'jurusan',
        // tambahkan kolom lain sesuai dengan tabel database Anda
    ];
}
