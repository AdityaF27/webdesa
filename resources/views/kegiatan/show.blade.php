

@section('content')
<div class="container my-5">
  <div class="row">
    <div class="col-md-12">
      <h2 style="color: #2E8B57;">{{ $kegiatan->judul }}</h2>
      <p class="text-muted">{{ $kegiatan->created_at->translatedFormat('d F Y') }}</p>
      <img src="{{ asset('storage/kegiatan/' . $kegiatan->gambar) }}" alt="{{ $kegiatan->judul }}" class="img-fluid my-4" style="border-radius: 10px;">
      <div class="isi-deskripsi">
        {!! $kegiatan->deskripsi !!}
      </div>
    </div>
  </div>
</div>
@endsection
