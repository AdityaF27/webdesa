<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    // Table name (optional jika nama tabel sesuai konvensi: 'kegiatans')
    protected $table = 'kegiatans';

   
    // app/Models/Kegiatan.php
protected $fillable = ['judul', 'deskripsi', 'gambar'];

}
