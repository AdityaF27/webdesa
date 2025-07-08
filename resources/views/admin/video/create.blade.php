@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tambah Video</h1>

    <form action="{{ route('admin.video.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul Video</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="link">Link Video (YouTube, Vimeo, dll)</label>
            <input type="url" name="link" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-2">Simpan</button>
        <a href="{{ route('admin.video.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </form>
</div>
@endsection
