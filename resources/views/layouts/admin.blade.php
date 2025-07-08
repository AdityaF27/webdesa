<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - @yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tambahan Style dari halaman lain -->
    @stack('styles')

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
        }

        .wrapper {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

       .sidebar {
    width: 250px;
    background-color: rgba(52, 58, 64, 0.85); /* semi-transparan hitam keabu-abuan */
    color: #fff;
    padding-top: 20px;
    border-right: 1px solid #dee2e6;
    flex-shrink: 0;
    overflow-y: auto;
    backdrop-filter: blur(4px); /* efek blur jika ada elemen di belakangnya */
}

        .sidebar h4 {
            text-align: center;
            font-weight: bold;
            color: #fff;
            margin-bottom: 20px;
        }

       
       .sidebar a {
    display: block;
    padding: 12px 20px;
    color: #ccc;
    font-weight: 500;
    text-decoration: none;
    border-bottom: 1px solid #495057; /* 🔹 garis antar menu */
    transition: background-color 0.3s, color 0.3s;
}

.sidebar a:last-child {
    border-bottom: none; /* hilangkan garis di item terakhir */
}

.sidebar a:hover,
.sidebar a.active {
    background-color: #007bff;
    color: #fff;
}
        .main-content {
            flex-grow: 1;
            padding: 30px;
            overflow-y: auto;
        }

        /* Responsivitas */
        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
          
            <a href="{{ route('admin.logo.index') }}" class="{{ request()->routeIs('admin.logo.index') ? 'active' : '' }}">Logo</a>
            <a href="{{ route('admin.kegiatan.index') }}" class="{{ request()->routeIs('admin.kegiatan.index') ? 'active' : '' }}">Kegiatan</a>
            <a href="{{ route('admin.pengumuman.index') }}" class="{{ request()->routeIs('admin.pengumuman.index') ? 'active' : '' }}">Pengumuman</a>
            <a href="{{ route('admin.struktur.index') }}" class="{{ request()->routeIs('admin.struktur.index') ? 'active' : '' }}">Struktur</a>
            <a href="{{ route('admin.berita.index') }}" class="{{ request()->routeIs('admin.berita.index') ? 'active' : '' }}">Berita</a>
            <a href="{{ route('admin.statistik.index') }}" class="{{ request()->routeIs('admin.statistik.index') ? 'active' : '' }}">statistik</a>
            
        </div>

        <!-- Konten Utama -->
        <div class="main-content">
            {{-- Flash Message --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Konten Halaman --}}
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Tambahan Script dari halaman lain -->
    @stack('scripts')
</body>
</html>
