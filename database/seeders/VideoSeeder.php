<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    public function run(): void
    {
        Video::create([
            'type' => 'youtube',
            'link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', // contoh
            'file_path' => null,
        ]);
    }
}
