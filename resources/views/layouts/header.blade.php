<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<header class="bg-success text-white shadow-sm py-3 px-4 d-flex align-items-center justify-content-between">
    
    <!-- Kiri: Logo/Ikon Admin (opsional) -->
    <div class="d-none d-md-block">
        <i class="fas fa-user-shield fa-lg"></i>
    </div>

    <!-- Tengah: Judul -->
    <div class="text-center flex-grow-1">
        <h5 class="mb-0 fw-bold">Dashboard Admin - Website Desa</h5>
    </div>

    <!-- Kanan: Logout -->
    <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-light btn-sm d-flex align-items-center gap-2 shadow-sm transition">
                <i class="fas fa-sign-out-alt"></i>
                <span class="d-none d-sm-inline">Logout</span>
            </button>
        </form>
    </div>
</header>
