<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    // Tampilkan daftar pengumuman dengan pagination, untuk halaman admin
    public function index()
    {
        $pengumuman = Pengumuman::latest()->paginate(10);
        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    // Simpan pengumuman baru (dari form tambah di halaman index)
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        Pengumuman::create($request->only('judul', 'isi', 'tanggal'));

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan.');
    }

   public function edit(Pengumuman $pengumuman)
{
    return view('admin.pengumuman.edit', compact('pengumuman'));
}

public function update(Request $request, Pengumuman $pengumuman)
{
    $request->validate([
        'judul' => 'required',
        'isi' => 'required',
        'tanggal' => 'required|date',
    ]);

    $pengumuman->update($request->only('judul', 'isi', 'tanggal'));

    return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui');
}


    // Hapus pengumuman
    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil dihapus.');
    }
  public function list()
{
    $pengumuman = Pengumuman::latest()->paginate(10); // pake paginate
    return view('pengumuman.index', compact('pengumuman'));
}

}
