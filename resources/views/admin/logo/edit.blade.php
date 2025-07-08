@extends('layouts.admin')
@extends('layouts.header')

@section('content')
<div class="container mt-4">
    <h2>Edit Logo</h2>

    <form action="{{ route('admin.logo.update', $logo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="logo" class="form-label">Ganti Logo</label>
            <input type="file" name="logo" class="form-control">
            <small class="text-muted">Biarkan kosong jika tidak ingin mengganti</small>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.logo') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
