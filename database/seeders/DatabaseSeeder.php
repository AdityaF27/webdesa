<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Desa',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('admin123'), // <- penting!
            'role' => 'admin'
        ]);
        $this->call([
        VideoSeeder::class,
    ]);
    }
}
