@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Video</h1>

    <form action="{{ route('admin.video.update', $video->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul Video</label>
            <input type="text" name="judul" class="form-control" value="{{ $video->judul }}" required>
        </div>

        <div class="form-group">
            <label for="link">Link Video</label>
            <input type="url" name="link" class="form-control" value="{{ $video->link }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Update</button>
        <a href="{{ route('admin.video.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </form>
</div>
@endsection
