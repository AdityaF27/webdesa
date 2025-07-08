@extends('layouts.admin')
@extends('layouts.header')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Ubah Logo Website</h5>
                </div>

                <div class="card-body">
                   

                    {{-- Form Upload --}}
                    <form action="{{ route('admin.logo.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="foto" class="form-label">Upload Logo Baru</label>
                            <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror" required>

                            @error('foto')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        @if($logo)
                            <div class="mb-3">
                                <label class="form-label">Logo Saat Ini:</label>
                                <div class="border rounded p-2 bg-light">
                                    <img src="{{ asset('storage/' . $logo->foto) }}" alt="Logo Saat Ini" class="img-fluid" style="max-height: 100px;">
                                </div>
                            </div>
                        @endif

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
