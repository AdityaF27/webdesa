<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class VideoController extends Controller
{
    // Menampilkan video
    public function index()
    {
        // Ambil video yang terbaru
        $videos = Video::latest()->get();
        
        // Tampilkan ke view
        return view('admin.video.index', compact('videos'));
    }

    // Simpan video yang diunggah
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4|max:102400',  // Max 100MB
        ]);

        // Membuat instance video baru
        $video = new Video();
        $video->title = $request->title;

        // Memeriksa jika ada file video yang diupload
        if ($request->hasFile('video')) {
            // Simpan video di direktori public
            $path = $request->file('video')->store('videos', 'public');
            $video->video = $path;  // Menyimpan path file video ke database
        }

        // Simpan video ke database
        $video->save();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.video.index')->with('success', 'Video berhasil diunggah!');
    }

    // Hapus video
    public function destroy($id)
    {
        // Ambil video berdasarkan ID
        $video = Video::findOrFail($id);

        // Hapus file video jika ada
        if ($video->video && Storage::disk('public')->exists($video->video)) {
            Storage::disk('public')->delete($video->video);
        }

        // Hapus data video dari database
        $video->delete();

        return redirect()->route('admin.video.index')->with('success', 'Video berhasil dihapus.');
    }
}
