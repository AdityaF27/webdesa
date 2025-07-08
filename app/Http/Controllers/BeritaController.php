<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Tampilkan daftar semua berita
     */
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Simpan berita baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        // Simpan thumbnail jika ada
        $path = $request->file('thumbnail')?->store('thumbnails', 'public');

        Berita::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'thumbnail' => $path,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Tampilkan detail berita (jika dibutuhkan)
     */
  public function show(Berita $berita)
{
    return view('berita.show', compact('berita'));
}



    /**
     * Tampilkan form edit berita
     */
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Perbarui data berita
     */
    public function update(Request $request, Berita $berita)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        // Jika ada file baru, simpan dan timpa
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $berita->update($validated);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Hapus berita
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
