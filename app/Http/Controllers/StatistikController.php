<?php


   namespace App\Http\Controllers;

use App\Models\Statistik;
use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index()
    {
        $statistik = Statistik::first();
        return view('admin.statistik.index', compact('statistik'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jumlah_warga' => 'required|integer',
            'perempuan' => 'required|integer',
            'laki_laki' => 'required|integer',
            'keluarga' => 'required|integer',
            'lansia' => 'required|integer',
        ]);

        Statistik::create($data);
        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function update(Request $request, Statistik $statistik)
    {
        $data = $request->validate([
            'jumlah_warga' => 'required|integer',
            'perempuan' => 'required|integer',
            'laki_laki' => 'required|integer',
            'keluarga' => 'required|integer',
            'lansia' => 'required|integer',
        ]);

        $statistik->update($data);
        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }
}
