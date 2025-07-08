@extends('layouts.admin') <!-- Sesuaikan dengan layout admin kamu -->
@extends('layouts.header')
@section('content')
<div class="container py-4">
    <h4 class="mb-4 fw-bold">Data Statistik Desa</h4>

    

    <form action="{{ $statistik ? route('admin.statistik.update', $statistik->id) : route('admin.statistik.store') }}" method="POST">
        @csrf
        @if($statistik)
            @method('PUT')
        @endif

        <div class="row g-3">
            <div class="col-md-4">
                <label for="jumlah_warga" class="form-label">Jumlah Warga</label>
                <input type="number" name="jumlah_warga" class="form-control" value="{{ old('jumlah_warga', $statistik->jumlah_warga ?? '') }}" required>
            </div>

            <div class="col-md-4">
                <label for="perempuan" class="form-label">Perempuan</label>
                <input type="number" name="perempuan" class="form-control" value="{{ old('perempuan', $statistik->perempuan ?? '') }}" required>
            </div>

            <div class="col-md-4">
                <label for="laki_laki" class="form-label">Laki-laki</label>
                <input type="number" name="laki_laki" class="form-control" value="{{ old('laki_laki', $statistik->laki_laki ?? '') }}" required>
            </div>

            <div class="col-md-4">
                <label for="keluarga" class="form-label">Jumlah Keluarga</label>
                <input type="number" name="keluarga" class="form-control" value="{{ old('keluarga', $statistik->keluarga ?? '') }}" required>
            </div>

            <div class="col-md-4">
                <label for="lansia" class="form-label">Jumlah Lansia</label>
                <input type="number" name="lansia" class="form-control" value="{{ old('lansia', $statistik->lansia ?? '') }}" required>
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">
                {{ $statistik ? 'Update' : 'Simpan' }}
            </button>
        </div>
    </form>
</div>
@endsection
