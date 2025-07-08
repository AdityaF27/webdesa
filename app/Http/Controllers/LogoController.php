<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    public function index()
    {
        $logo = Logo::latest()->first();
        return view('admin.logo.index', compact('logo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        // Hapus logo lama jika ada
        $old = Logo::latest()->first();
        if ($old && $old->foto && Storage::disk('public')->exists($old->foto)) {
            Storage::disk('public')->delete($old->foto);
            $old->delete();
        }

        // Upload logo baru
        $path = $request->file('foto')->store('logos', 'public');

        // Simpan ke database
        Logo::create(['foto' => $path]);

        return redirect()->route('admin.logo.index')->with('success', 'Logo berhasil diperbarui.');
    }
}
