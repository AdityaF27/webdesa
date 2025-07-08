<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'konten',
        'thumbnail',
    ];

    /**
     * Format tanggal dibuat
     */
    public function getCreatedAtFormattedAttribute()
    {
        return $this->created_at->format('d-m-Y');
    }

    /**
     * URL penuh untuk thumbnail (jika ada)
     */
    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail
            ? asset('storage/' . $this->thumbnail)
            : null;
    }
}
