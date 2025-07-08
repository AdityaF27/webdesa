@extends('layouts.admin')
@extends('layouts.header')
@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Struktur Organisasi</h2>

    

    {{-- Form Upload / Update --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            {{ $struktur ? 'Update Struktur Organisasi' : 'Upload Struktur Organisasi' }}
        </div>
        <div class="card-body">
            <form action="{{ $struktur ? route('admin.struktur.update', $struktur->id) : route('admin.struktur.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($struktur)
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="foto" class="form-label">Pilih Gambar</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="foto">
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fa fa-upload me-1"></i> {{ $struktur ? 'Update Struktur' : 'Upload Struktur' }}
                </button>
            </form>
        </div>
    </div>

    {{-- Tampilan Gambar Struktur --}}
    @if ($struktur)
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            Struktur Organisasi Saat Ini
        </div>
        <div class="card-body text-center">
            <img src="{{ asset('storage/' . $struktur->foto) }}" alt="Struktur Organisasi" class="img-fluid rounded border" style="max-height: 500px;">

            <form action="{{ route('admin.struktur.destroy', $struktur->id) }}" method="POST" class="mt-4" onsubmit="return confirm('Yakin ingin menghapus gambar ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash me-1"></i> Hapus Struktur
                </button>
            </form>
        </div>
    </div>
    @endif
</div>
@endsection
