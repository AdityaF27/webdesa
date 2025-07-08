<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    public function index()
    {
        $struktur = Struktur::latest()->first();
        return view('admin.struktur.index', compact('struktur'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $request->file('foto')->store('struktur', 'public');

        Struktur::create(['foto' => $path]);

        return redirect()->route('admin.struktur.index')->with('success', 'Struktur berhasil diupload.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $struktur = Struktur::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($struktur->foto && Storage::disk('public')->exists($struktur->foto)) {
                Storage::disk('public')->delete($struktur->foto);
            }

            $path = $request->file('foto')->store('struktur', 'public');
            $struktur->foto = $path;
        }

        $struktur->save();

        return redirect()->route('admin.struktur.index')->with('success', 'Struktur berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $struktur = Struktur::findOrFail($id);

        if ($struktur->foto && Storage::disk('public')->exists($struktur->foto)) {
            Storage::disk('public')->delete($struktur->foto);
        }

        $struktur->delete();

        return redirect()->route('admin.struktur.index')->with('success', 'Struktur berhasil dihapus.');
    }
}
