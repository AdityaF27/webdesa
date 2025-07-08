{{-- resources/views/berita/show.blade.php --}}
@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- Judul --}}
            <h3 class="text-success fw-bold mb-3">{{ $berita->judul }}</h3>

            {{-- Tanggal --}}
            <p class="text-muted mb-3">
                <i class="fas fa-calendar-alt"></i>
                {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}
            </p>

            {{-- Thumbnail --}}
            @if($berita->thumbnail)
                <div class="mb-3 text-center">
                    <img src="{{ asset('storage/' . $berita->thumbnail) }}"
                         alt="Thumbnail"
                         class="img-thumbnail shadow-sm"
                         style="width: 100%; max-width: 600px; height: auto; object-fit: cover;">
                </div>
            @endif

            {{-- Konten --}}
            <div class="bg-white p-3 rounded shadow-sm" style="font-size: 16px; line-height: 1.6;">
                {!! $berita->konten !!}
            </div>

            {{-- Tombol Kembali --}}
            <div class="mt-4">
                <a href="{{ url()->previous() }}" class="btn btn-outline-success btn-sm">
                    ← Kembali
                </a>
            </div>

        </div>
    </div>
</div>
@endsection
