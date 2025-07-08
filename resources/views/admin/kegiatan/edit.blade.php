
@section('content')
<div class="container mt-5">
    <h2>Edit Kegiatan</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="judul">Judul</label>
            <input type="text" name="judul" value="{{ $kegiatan->judul }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" rows="5" class="form-control" required>{{ $kegiatan->deskripsi }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="gambar">Gambar (biarkan kosong jika tidak ingin diganti)</label><br>
            <img src="{{ asset('storage/kegiatan/' . $kegiatan->gambar) }}" width="150" class="mb-2">
            <input type="file" name="gambar" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.kegiatan') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
