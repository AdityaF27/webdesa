<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
    use HasFactory;

    protected $table = 'statistik';

    protected $fillable = [
        'jumlah_warga',
        'perempuan',
        'laki_laki',
        'keluarga',
        'lansia',
    ];
}
