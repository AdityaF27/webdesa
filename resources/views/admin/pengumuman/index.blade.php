@extends('layouts.admin')
@extends('layouts.header')
@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Kelola Pengumuman</h2>

    {{-- Form Tambah Pengumuman --}}
    <div class="card shadow-sm mb-5">
        <div class="card-header bg-primary text-white">
            Tambah Pengumuman Baru
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pengumuman.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" id="judul" name="judul"
                        class="form-control @error('judul') is-invalid @enderror"
                        value="{{ old('judul') }}" required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi</label>
                    <textarea id="isi" name="isi" rows="4"
                        class="form-control @error('isi') is-invalid @enderror"
                        required>{{ old('isi') }}</textarea>
                    @error('isi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal"
                        class="form-control @error('tanggal') is-invalid @enderror"
                        value="{{ old('tanggal') ?? date('Y-m-d') }}" required>
                    @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Simpan Pengumuman</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Daftar Pengumuman --}}
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            Daftar Pengumuman
        </div>
        <div class="card-body p-0">
            @if($pengumuman->count())
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 25%;">Judul</th>
                                <th>Isi</th>
                                <th style="width: 15%;">Tanggal</th>
                                <th style="width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengumuman as $item)
                                <tr>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($item->isi, 70) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                           

                                            <form action="{{ route('admin.pengumuman.destroy', $item->id) }}" method="POST"
                                                  onsubmit="return confirm('Hapus pengumuman ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="p-3">
                    {{ $pengumuman->links() }}
                </div>
            @else
                <p class="text-muted text-center my-4">Belum ada data pengumuman.</p>
            @endif
        </div>
    </div>
</div>
@endsection
