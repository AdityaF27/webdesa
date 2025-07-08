@extends('layouts.admin')
@extends('layouts.header')

@push('styles')
<!-- Tambahan style jika diperlukan -->
@endpush

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Kelola Berita</h2>

    

    {{-- Form Tambah Berita --}}
    <div class="card shadow-sm mb-5">
        <div class="card-header bg-primary text-white">
            Tambah Berita Baru
        </div>
        <div class="card-body">
            <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="konten" class="form-label">Konten</label>
                    <textarea name="konten" id="editor" class="form-control @error('konten') is-invalid @enderror" rows="7">{{ old('konten') }}</textarea>
                    @error('konten')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail (opsional)</label>
                    <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror" accept="image/*">
                    @error('thumbnail')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save me-1"></i> Simpan Berita
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Daftar Berita --}}
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            Daftar Berita
        </div>
        <div class="card-body p-0">
            @if($beritas->count())
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 40px;">No</th>
                                <th>Judul</th>
                                <th style="width: 120px;">Thumbnail</th>
                                <th style="width: 120px;">Tanggal</th>
                                <th style="width: 160px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($beritas as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <a href="{{ route('berita.show', $item->id) }}" target="_blank">
                                        {{ $item->judul }}
                                    </a>
                                </td>
                                <td>
                                    @if($item->thumbnail)
                                        <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="Thumbnail" class="img-fluid rounded" style="max-height: 60px;">
                                    @else
                                        <span class="text-muted">Tidak Ada</span>
                                    @endif
                                </td>
                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        
                                        <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus berita ini?')" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash me-1"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-muted text-center my-4">Belum ada data berita yang tersedia.</p>
            @endif
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- CKEditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endpush
