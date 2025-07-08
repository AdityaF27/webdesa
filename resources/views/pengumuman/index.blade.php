

<section id="pengumuman" class="container" style="margin-top: 60px; padding: 60px 20px;">
    <h3 class="text-center" style="font-weight: bold; color: #2E8B57;">Semua Pengumuman</h3>
    <hr style="width: 60px; border-top: 3px solid #2E8B57; margin: 10px auto 30px auto;">

    <div class="row">
        @forelse ($pengumuman as $item)
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100" style="border-radius: 10px;">
                    <div class="card-header bg-success text-white" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <i class="fas fa-bullhorn"></i> {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-success">{{ $item->judul }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($item->isi, 200) }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>Belum ada pengumuman.</p>
            </div>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $pengumuman->links() }}
    </div>
</section>
