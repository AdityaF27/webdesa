<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengumuman extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi mass assignment
    protected $fillable = [
        'judul',
        'isi',
        'tanggal',
    ];

    // Kolom tanggal otomatis di-cast ke Carbon (tanggal)
    protected $dates = [
        'tanggal',
    ];
}
