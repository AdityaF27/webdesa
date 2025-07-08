

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4" style="color: #2E8B57;">Semua Pengumuman</h2>

    @if($pengumuman->count())
        <div class="row">
            @foreach ($pengumuman as $item)
                <div class="col-md-6 mb-4">
                    <div class="panel" style="border: none; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <div class="panel-heading" style="background-color: #2E8B57; color: white; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                            <i class="fas fa-bullhorn"></i> <strong>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</strong>
                        </div>
                        <div class="panel-body">
                            <h4 style="font-weight: bold; color: #2E8B57;">{{ $item->judul }}</h4>
                            <p style="color: #444;">{{ $item->isi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $pengumuman->links() }}
        </div>
    @else
        <p class="text-center">Tidak ada pengumuman tersedia.</p>
    @endif
</div>
@endsection
