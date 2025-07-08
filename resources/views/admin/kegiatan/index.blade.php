@extends('layouts.admin')
@extends('layouts.header')
@section('content')
<div class="container mt-5">
    {{-- Form Tambah Kegiatan --}}
    <div class="card shadow-sm mb-5">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Kegiatan</h5>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('admin.kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="5" required></textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" required>
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Simpan Kegiatan</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Daftar Kegiatan --}}
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Kegiatan</h5>
        </div>
        <div class="card-body">
            @if($kegiatan->count())
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 5%;">No</th>
                                <th>Judul</th>
                                <th style="width: 120px;">Gambar</th>
                                <th style="width: 120px;">Tanggal</th>
                                <th style="width: 160px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kegiatan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>
                                    <img src="{{ asset('storage/kegiatan/' . $item->gambar) }}" class="img-fluid rounded" style="max-height: 80px;">
                                </td>
                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                <td>
                                   

                                    <form action="{{ route('admin.kegiatan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus kegiatan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-muted">Belum ada data kegiatan.</p>
            @endif
        </div>
    </div>
</div>
@endsection
