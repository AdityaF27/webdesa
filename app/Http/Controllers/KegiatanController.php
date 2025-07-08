<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    // Tampilkan semua kegiatan di admin
   public function index()
{
    $kegiatan = Kegiatan::latest()->get(); 
    return view('admin.kegiatan.index', compact('kegiatan'));
}

    // Tampilkan form create kegiatan
    public function create()
    {
        $kegiatans = Kegiatan::latest()->get(); // untuk ditampilkan di bawah form input
        return view('admin.kegiatan.create', compact('kegiatan'));
    }

    // Simpan kegiatan baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->storeAs('public/kegiatan', $namaGambar);

        Kegiatan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $namaGambar,
        ]);

        return redirect()->back()->with('success', 'Data kegiatan berhasil ditambahkan.');
    }

    // Tampilkan halaman detail kegiatan ke user (frontend)
    public function show($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.show', compact('kegiatan'));
    }

    public function showToUser($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.show', compact('kegiatan'));
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    // Proses update kegiatan
    public function update(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
           
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'judul' => $request->judul,
            
        ];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($kegiatan->gambar && Storage::exists('public/kegiatan/' . $kegiatan->gambar)) {
                Storage::delete('public/kegiatan/' . $kegiatan->gambar);
            }

            $gambarBaru = $request->file('gambar');
            $namaGambarBaru = time() . '.' . $gambarBaru->getClientOriginalExtension();
            $gambarBaru->storeAs('public/kegiatan', $namaGambarBaru);

            $data['gambar'] = $namaGambarBaru;
        }

        $kegiatan->update($data);

        return redirect()->route('admin.kegiatan')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    // Hapus kegiatan
    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        if ($kegiatan->gambar && Storage::exists('public/kegiatan/' . $kegiatan->gambar)) {
            Storage::delete('public/kegiatan/' . $kegiatan->gambar);
        }

        $kegiatan->delete();

        return redirect()->back()->with('success', 'Kegiatan berhasil dihapus.');
    }
}
