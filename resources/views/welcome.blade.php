<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Desa segunung</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">


  <style>
   
body {
  margin: 0;
  font-family: 'Inter', sans-serif;
 "background: repeating-linear-gradient(
    45deg,
    #f4fff8,
    #f4fff8 10px,
    #e0ffe9 10px,
    #e0ffe9 20px
  );
  color: #000;
}

.main-header {
  background: linear-gradient(to right, #2E8B57, #3cb371);
  color: white;
  padding: 10px 30px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.logo-container .logo-link {
  display: flex;
  align-items: center;
  text-decoration: none;
  color: white;
}

.logo-container img {
  max-height: 50px;
  margin-right: 10px;
  border-radius: 6px;
}

.site-name {
  font-weight: 700;
  font-size: 1.5rem;
}

.nav-menu {
  list-style: none;
  display: flex;
  gap: 12px;
  padding: 0;
  margin: 0;
}

.nav-menu li a {
  color: white;
  font-weight: 600;
  padding: 6px 12px;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.2s;
}

.nav-menu li a:hover {
  background-color: rgba(255,255,255,0.2);
}

.header-actions {
  display: flex;
  align-items: center;
  gap: 16px;
}

/* Dark Mode Toggle */
.switch {
  position: relative;
  width: 50px;
  height: 26px;
}
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0; left: 0; right: 0; bottom: 0;
  background-color: #ccc;
  transition: .4s;
  border-radius: 34px;
}
.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 3px;
  bottom: 3px;
  background-color: white;
  transition: .4s;
  border-radius: 50%;
}
input:checked + .slider {
  background-color: #2E8B57;
}
input:checked + .slider:before {
  transform: translateX(24px);
}

/* Masuk Button */
.btn-masuk {
  background-color: white;
  color: #2E8B57;
  border: none;
  padding: 6px 16px;
  font-weight: 600;
  border-radius: 6px;
  text-decoration: none;
  transition: all 0.3s ease;
}
.btn-masuk:hover {
  background-color: #2E8B57;
  color: white;
}


/* ========== DARK MODE ========== */
body.dark-mode {
  background-color: #1e1e1e;
  color: #ffffff;
}

body.dark-mode header {
  background: linear-gradient(to right, #1c1c1c, #2e2e2e);
}

body.dark-mode nav ul li a {
  color: #ffffff;
}

body.dark-mode nav ul li a:hover {
  background-color: rgba(255, 255, 255, 0.1);
}


body.dark-mode .struktur-section,
body.dark-mode .tentang-konten-section,
body.dark-mode .tentang-desa-section,
body.dark-mode footer {
  background-color: #2a2a2a;
  color: #ffffff;
}

body.dark-mode .berita-caption p,
body.dark-mode .tentang-desa-text {
  color: #ccc;
}


body.dark-mode .panel-body h4 {
  color: #90ee90;
}

body.dark-mode hr {
  border-top: 4px solid #2E8B57;
}

.carousel-wrapper {
  margin-top: 0; /* sesuai tinggi header */
  padding: 0;
}

.carousel-img {
  width: 100%;
  height: 100vh;
  object-fit: cover;
}

.carousel-caption-fixed {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
  z-index: 10;
  text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
}

.carousel-caption-fixed h2 {
  font-size: 3rem;
  font-weight: bold;
}

.carousel-caption-fixed p {
  font-size: 1.4rem;
}
.carousel-caption-fixed {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 10;
  text-align: center;
  color: #ffffff;
  padding: 20px;
  max-width: 90%;
  background: rgba(0, 0, 0, 0.4); /* semi-transparent background */
  border-radius: 10px;
  text-shadow: 1px 1px 6px rgba(0,0,0,0.7);
  animation: fadeInDown 1s ease-in-out;
}

.carousel-caption-fixed h2 {
  font-size: 3rem;
  font-weight: 800;
  color: #ffffff;
  margin-bottom: 15px;
  letter-spacing: 1px;
  line-height: 1.2;
}

.carousel-caption-fixed p {
  font-size: 1.3rem;
  color: #e0e0e0;
  margin-bottom: 0;
  font-weight: 400;
}

/* Animasi */
@keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translate(-50%, -60%);
  }
  to {
    opacity: 1;
    transform: translate(-50%, -50%);
  }
}

/* Responsif */
@media (max-width: 768px) {
  .carousel-caption-fixed h2 {
    font-size: 2rem;
  }

  .carousel-caption-fixed p {
    font-size: 1rem;
  }
}



/* Statistik Section */
.statistik-wrapper {
  background-color: #f4fff8;
  padding: 80px 20px;
  text-align: center;
  transition: background-color 0.3s ease;
}

.statistik-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 30px;
  max-width: 1200px;
  margin: 0 auto;
}

.statistik-box {
  background-color: #ffffff;
  border-radius: 12px;
  padding: 25px 20px;
  width: 180px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.statistik-box:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

.statistik-box i {
  font-size: 2.5rem;
  margin-bottom: 10px;
  color: #2E8B57;
}

.statistik-box h4 {
  font-size: 15px;
  color: #444;
  font-weight: 600;
  margin-bottom: 6px;
}

.statistik-box p {
  font-size: 22px;
  color: #2E8B57;
  font-weight: bold;
  margin: 0;
}

/* ================= DARK MODE ================= */
body.dark-mode .statistik-wrapper {
  background-color: #1e1e1e; /* latar belakang full dark */
}

body.dark-mode .statistik-box {
  background-color: #2b2b2b;
  color: #ffffff;
  box-shadow: 0 6px 12px rgba(255, 255, 255, 0.05);
}

body.dark-mode .statistik-box i {
  color: #90ee90 !important; /* Hijau terang agar ikon tetap terlihat */
}

body.dark-mode .statistik-box h4 {
  color: #dddddd;
}

body.dark-mode .statistik-box p {
  color: #90ee90;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
  .statistik-box {
    width: 100%;
    max-width: 300px;
  }
}





/* ========== TENTANG DESA SECTION ========== */
.tentang-desa-section {
  background-color: #f4fff8;
  padding: 80px 20px;
}

.tentang-desa-text {
  font-size: 1.1rem;
  max-width: 800px;
  margin: 0 auto;
  color: #333;
}

.tentang-desa-divider {
  width: 100px;
  border-top: 3px solid #2E8B57;
  margin: 20px auto;
}

/* Button Switch Tabs */
.switch-button-group .btn {
  border-radius: 20px;
  padding: 8px 20px;
  font-weight: 600;
  border: 2px solid #2E8B57;
  transition: all 0.3s ease;
}

.switch-button-group .btn-success {
  background-color: #2E8B57;
  color: white;
}

.switch-button-group .btn-default {
  background-color: transparent;
  color: #2E8B57;
}

.switch-button-group .btn:hover {
  background-color: #2E8B57;
  color: white;
}

/* Content Box (image & text) */
.content-box {
  margin-top: 30px;
}

.img-rounded {
  border-radius: 12px;
}

/* Dark Mode Styling */
body.dark-mode .tentang-desa-section {
  background-color: #2a2a2a;
}

body.dark-mode .tentang-desa-text {
  color: #ccc;
}

body.dark-mode .tentang-desa-divider {
  border-color: #90ee90;
}

body.dark-mode .switch-button-group .btn-default {
  color: #90ee90;
  border-color: #90ee90;
}

body.dark-mode .switch-button-group .btn-success {
  background-color: #90ee90;
  color: #1e1e1e;
}

body.dark-mode .switch-button-group .btn:hover {
  background-color: #90ee90;
  color: #1e1e1e;
}

body.dark-mode h3 {
  color: #ffffff;
}

body.dark-mode p {
  color: #ccc;
}
/* Tentang Desa - DARK MODE */
body.dark-mode .tentang-desa-section {
  background-color: #1e1e1e !important;
}

body.dark-mode .tentang-desa-text {
  color: #cccccc;
}

body.dark-mode .tentang-desa-divider {
  border-top: 3px solid #90ee90;
}

body.dark-mode .switch-button-group .btn-default {
  background-color: transparent;
  color: #90ee90;
  border-color: #90ee90;
}

body.dark-mode .switch-button-group .btn-success {
  background-color: #90ee90;
  color: #1e1e1e;
  border-color: #90ee90;
}

body.dark-mode .switch-button-group .btn:hover {
  opacity: 0.9;
}

body.dark-mode .content-box h3 {
  color: #ffffff;
}

body.dark-mode .content-box p {
  color: #cccccc;
}

/* ========== STRUKTUR PEMERINTAHAN DESA ========== */
/* STRUKTUR SECTION */
.struktur-section {
  
  padding: 80px 20px;
  text-align: center;
}

.struktur-section h3 {
  font-size: 1.8rem;
  font-weight: bold;
  color: #2E8B57;
}

.struktur-divider {
  width: 100px;
  border-top: 3px solid #2E8B57;
  margin: 20px auto;
}

.struktur-section p {
  max-width: 700px;
  margin: 0 auto 30px;
  color: #444;
  font-size: 1.05rem;
}

/* Image container */
.struktur-image-container {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 15px;
}

.struktur-img {
  border-radius: 12px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
  width: 100%;
  max-width: 850px;
  height: auto;
  cursor: zoom-in;
}

.struktur-img:hover {
  transform: scale(1.01);
}

/* DARK MODE */
body.dark-mode .struktur-section {
  background-color: #2a2a2a;
}

body.dark-mode .struktur-section h3 {
  color: #90ee90;
}

body.dark-mode .struktur-section p {
  color: #dddddd; /* lebih terang dari sebelumnya */
}

body.dark-mode .struktur-divider {
  border-color: #90ee90;
}

body.dark-mode .struktur-img {
  box-shadow: 0 8px 16px rgba(255, 255, 255, 0.05);
}
/* STRUKTUR SECTION */
.struktur-section {
 
  padding: 80px 20px;
  text-align: center;
  transition: background-color 0.4s ease, color 0.4s ease;
}

.struktur-section h3 {
  font-size: 1.8rem;
  font-weight: bold;
  color: #2E8B57;
}

.struktur-divider {
  width: 100px;
  border-top: 3px solid #2E8B57;
  margin: 20px auto;
}

.struktur-section p {
  max-width: 720px;
  margin: 0 auto 30px;
  font-size: 1.05rem;
  color: #444;
}

/* ---------- Struktur Image ---------- */
.struktur-image-container {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 15px;
}

.struktur-img {
  border-radius: 12px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease;
  width: 100%;
  max-width: 850px;
  height: auto;
}

/* ---------- DARK MODE Fix ---------- */
body.dark-mode .struktur-section {
  background-color: #1e1e1e;
}

body.dark-mode .struktur-section h3 {
  color: #90ee90;
}

body.dark-mode .struktur-section p {
  color: #e0e0e0;
}

body.dark-mode .struktur-divider {
  border-color: #90ee90;
}

body.dark-mode .struktur-img {
  box-shadow: 0 8px 16px rgba(255, 255, 255, 0.08);
}


/* Light mode */
.card-berita {
  border-radius: 10px;
  overflow: hidden;
  background-color: #ffffff;
  transition: all 0.3s ease;
}

.card-berita:hover {
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
  transform: translateY(-3px);
}

.card-title {
  font-size: 1.1rem;
  font-weight: 600;
}

.card-text {
  font-size: 0.95rem;
  color: #444;
}

/* Tombol di tengah bawah */
.card-berita .btn-outline-success {
  width: auto;
  padding: 6px 16px;
  font-weight: 500;
}
.btn-berita-lainnya {
  margin-top: 60px;
  padding-top: 10px;
}


/* DARK MODE SUPPORT */
body.dark-mode .dark-mode-section {
  background-color: #1b1b1b;
  color: #e0e0e0;
}

body.dark-mode .dark-mode-box {
  background-color: #2b2b2b;
  border-color: #90ee90;
}

body.dark-mode .card-title {
  color: #90ee90;
}

body.dark-mode .card-text,
body.dark-mode .text-muted {
  color: #ccc;
}

body.dark-mode .btn-outline-success {
  color: #90ee90;
  border-color: #90ee90;
}

body.dark-mode .btn-outline-success:hover {
  background-color: #90ee90;
  color: #1e1e1e;
}

body.dark-mode hr {
  border-top-color: #90ee90;
}
/* Untuk light mode */
.pengumuman-section {
  background-color: #f4fff8;
}

.panel {
  border: 1px solid #dcdcdc;
  border-radius: 10px;
  background-color: #fff;
}

.panel-heading {
  font-weight: 600;
  font-size: 0.95rem;
  background-color: #2E8B57;
  color: white;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.panel-body h4 {
  color: #2E8B57;
  font-size: 1.1rem;
}

.panel-body p {
  font-size: 0.95rem;
  color: #444;
}

/* DARK MODE */
body.dark-mode .pengumuman-section {
  background-color: #1c1c1c;
  color: #f0f0f0;
}

body.dark-mode .dark-mode-box {
  background-color: #2b2b2b;
  border-color: #4caf50;
}

body.dark-mode .panel-heading {
  background-color: #4caf50;
  color: #fff;
}

body.dark-mode .panel-body h4 {
  color: #90ee90;
}

body.dark-mode .dark-text {
  color: #ccc;
}

/* Section background */
.kegiatan-section {
  background-color: #ffffff;
}

body.dark-mode .kegiatan-section {
  background-color: #1e1e1e;
}

/* Kartu kegiatan */
.kegiatan-card {
  border-radius: 10px;
  overflow: hidden;
  transition: 0.3s ease;
}

.kegiatan-card:hover {
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  transform: translateY(-4px);
}

.kegiatan-card .card-title {
  font-size: 1rem;
  margin-bottom: 10px;
  color: #2E8B57;
}

body.dark-mode .kegiatan-card .card-title {
  color: #90ee90;
}

body.dark-mode .kegiatan-card {
  background-color: #2b2b2b;
  border-color: #90ee90;
}

body.dark-mode .kegiatan-card small,
body.dark-mode .kegiatan-card i {
  color: #ccc;
}

/* Swiper pagination */
.swiper-pagination-bullet {
  background: #2E8B57;
  opacity: 0.5;
}

.swiper-pagination-bullet-active {
  background: #2E8B57;
  opacity: 1;
}

body.dark-mode .swiper-pagination-bullet {
  background: #90ee90;
}
/* ========== VIDEO SECTION ========== */
.video-section {
  
  padding: 100px 20px 60px 20px;
  margin-top: 80px;
  transition: background-color 0.3s ease;
}

.video-divider {
  width: 60px;
  border-top: 3px solid #2E8B57;
  margin: 10px auto 30px auto;
}

.video-wrapper {
  position: relative;
  width: 100%;
  max-width: 700px;
  padding-bottom: 35%; /* 16:9 ratio */
  height: 0;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.video-wrapper iframe {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  border-radius: 12px;
  border: none;
}

/* ========== DARK MODE ========== */
body.dark-mode .video-section {
  background-color: #1e1e1e;
}

body.dark-mode .video-divider {
  border-top: 3px solid #90ee90;
}

body.dark-mode .video-section h3 {
  color: #90ee90;
}

body.dark-mode .video-wrapper {
  box-shadow: 0 4px 20px rgba(144, 238, 144, 0.2);
}
/* ========= SECTION PETA ========== */
.peta-section {
  padding: 80px 20px 40px 20px;
  background-color: #f4fff8;
  transition: background-color 0.3s ease;
}

.peta-section h3 {
  font-weight: bold;
  color: #2E8B57;
}

.peta-section hr {
  width: 60px;
  border-top: 3px solid #2E8B57;
  margin: 10px auto 30px auto;
}

.peta-section .map-wrapper {
  position: relative;
  padding-bottom: 35%;
  height: 0;
  overflow: hidden;
  max-width: 700px;
  margin: 0 auto;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.peta-section .map-wrapper iframe {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  border: none;
  border-radius: 12px;
}

/* ========= DARK MODE ========== */
body.dark-mode .peta-section {
  background-color: #1e1e1e;
}

body.dark-mode .peta-section h3 {
  color: #90ee90;
}

body.dark-mode .peta-section hr {
  border-top: 3px solid #90ee90;
}

/* ========== FOOTER ========== */
.footer-section {
  background: linear-gradient(to right, #2E8B57, #3cb371);
  color: white;
  padding: 100px 20px 40px 20px;
  text-align: center;
  font-family: 'Inter', sans-serif;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.footer-section p {
  margin: 5px 0;
  font-size: 16px;
}

.footer-section p:first-child {
  font-size: 22px;
  font-weight: bold;
  margin-bottom: 8px;
  letter-spacing: 1px;
}

.footer-section a {
  color: #ffffff;
  text-decoration: underline;
}

.footer-section .social-icons a {
  margin: 0 10px;
  color: white;
  font-size: 1.2rem;
  transition: color 0.2s;
}

.footer-section .social-icons a:hover {
  color: #cceee0;
}

.footer-section hr {
  border-top: 1px solid #ffffff55;
  width: 60%;
  margin: 20px auto;
}

.footer-section .copyright {
  font-size: 14px;
  margin-top: 10px;
  color: #e0e0e0;
}

/* ========== DARK MODE ========== */
body.dark-mode .footer-section {
  background: linear-gradient(to right, #1d1d1d, #2d2d2d);
  color: #ffffff;
}

body.dark-mode .footer-section a {
  color: #90ee90;
}

body.dark-mode .footer-section hr {
  border-top: 1px solid #555;
}

body.dark-mode .footer-section .copyright {
  color: #cccccc;
}


/* ========== RESPONSIVE ========== */
@media (max-width: 768px) {
  header {
    flex-direction: column;
    text-align: center;
  }

  nav ul {
    flex-direction: column;
    background: #2E8B57;
    position: absolute;
    top: 70px;
    right: 20px;
    padding: 10px;
    display: none;
  }

  nav ul.active {
    display: flex;
  }

  .toggle-darkmode {
    margin-top: 10px;
  }

  .statistik-box {
    width: 100%;
    max-width: 300px;
  }
}


  </style>
</head>
<body>
<header class="main-header">
  <div class="logo-container">
    @php
        use App\Models\Logo;
        $logo = Logo::latest()->first();
    @endphp

    <a href="/" class="logo-link">
      @if($logo)
        <img src="{{ asset('storage/' . $logo->foto) }}" alt="Logo Desa Segunung">
      @else
        <img src="{{ asset('images/default-logo.png') }}" alt="Default Logo">
      @endif
      <span class="site-name">Desa Segunung</span>
    </a>
  </div>

  <nav>
    <ul class="nav-menu">
      <li><a href="#beranda">Beranda</a></li>
      <li><a href="#profil">Profil</a></li>
      <li><a href="#struktur">Struktur</a></li>
      <li><a href="#berita">Berita</a></li>
      <li><a href="#pengumuman">Pengumuman</a></li>
      <li><a href="#kegiatan">Kegiatan</a></li>
      <li><a href="#video">Video</a></li>
      <li><a href="#kontak">Kontak</a></li>
      <li><a href="#peta">Peta</a></li>
    </ul>
  </nav>

  <div class="header-actions">
    <label class="switch">
      <input type="checkbox" id="darkModeToggle">
      <span class="slider round"></span>
    </label>

    <a href="{{ route('login') }}" class="btn-masuk">Masuk</a>
  </div>
</header>
<!-- Carousel -->
<section id="beranda" class="carousel-wrapper">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{ asset('images/desa.png') }}" alt="Gambar 1" class="carousel-img">
        <div class="carousel-caption-fixed">
          <h2>Desa Segunung</h2>
          <p>Selamat datang di website resmi desa kami</p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('images/desa.png') }}" alt="Gambar 2" class="carousel-img">
        <div class="carousel-caption-fixed">
          <h2>Informasi Desa</h2>
          <p>Transparan, Aktual, dan Mudah Diakses</p>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('images/desa.png') }}" alt="Gambar 3" class="carousel-img">
        <div class="carousel-caption-fixed">
          <h2>Pelayanan Digital</h2>
          <p>Kami Hadir Untuk Masyarakat</p>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- Statistik -->
<section class="statistik-wrapper py-5"  data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-in-out">
  <div class="container statistik-container d-flex flex-wrap justify-content-center gap-4">
    
    <div class="statistik-box text-center">
      <i class="fas fa-users fa-2x mb-2 text-success"></i>
      <h4>Jumlah Warga</h4>
      <p>{{ number_format($statistik->jumlah_warga ?? 0) }}</p>
    </div>

    <div class="statistik-box text-center">
      <i class="fas fa-female fa-2x mb-2 text-danger"></i>
      <h4>Perempuan</h4>
      <p>{{ number_format($statistik->perempuan ?? 0) }}</p>
    </div>

    <div class="statistik-box text-center">
      <i class="fas fa-male fa-2x mb-2 text-primary"></i>
      <h4>Laki-laki</h4>
      <p>{{ number_format($statistik->laki_laki ?? 0) }}</p>
    </div>

    <div class="statistik-box text-center">
      <i class="fas fa-house-user fa-2x mb-2 text-warning"></i>
      <h4>Keluarga</h4>
      <p>{{ number_format($statistik->keluarga ?? 0) }}</p>
    </div>

    <div class="statistik-box text-center">
      <i class="fas fa-blind fa-2x mb-2 text-secondary"></i>
      <h4>Lansia</h4>
      <p>{{ number_format($statistik->lansia ?? 0) }}</p>
    </div>

  </div>
</section>

<hr style="width: 50%; border-top: 4px solid #2E8B57; margin-left: 0; margin-right: auto; margin-top: 120px; margin-bottom: 80px;">









<!-- Tentang Desa -->
<section id="profil" class="tentang-desa-section py-5" style="background-color: #f4fff8;">
  <div class="container text-center" data-aos="fade-up" data-aos-duration="1000">
    <p class="tentang-desa-text mb-3">
      Desa Segunung adalah desa yang berada di Kabupaten Mojokerto, dengan visi membangun masyarakat mandiri, sejahtera dan berbudaya.
    </p>
    <hr class="tentang-desa-divider mb-4">
    <div class="btn-group switch-button-group mb-5">
      <a href="#content-profil" class="btn btn-success">Profil Desa</a>
      <a href="#content-visi" class="btn btn-default">Visi & Misi</a>
    </div>

    <div class="row content-box align-items-center" id="content-profil">
      <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-left" data-aos-duration="1200" data-aos-easing="ease-in-out">
        <img src="{{ asset('images/des1.jpg') }}" class="img-fluid img-rounded shadow-sm" alt="Profil Desa" style="width: 100%; max-height: 350px; object-fit: cover;">
      </div>
      <div class="col-md-6 text-start" data-aos="fade-right" data-aos-duration="1200">
        <h3 class="mb-3">Profil Desa</h3>
        <p>
          Desa Segunung terletak di daerah perbukitan yang subur dan kaya budaya. Penduduk hidup rukun dan menjunjung nilai gotong royong.
        </p>
      </div>
    </div>

    <div class="row content-box align-items-center mt-5" id="content-visi" style="display: none;">
      <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-left" data-aos-duration="1200" data-aos-easing="ease-in-out">
        <img src="{{ asset('images/des2.jpg') }}" class="img-fluid img-rounded shadow-sm" alt="Visi Misi" style="width: 100%; max-height: 350px; object-fit: cover;">
      </div>
      <div class="col-md-6 text-start" data-aos="fade-right" data-aos-duration="1200">
        <h3 class="mb-3">Visi & Misi</h3>
        <p>
          <strong>Visi:</strong> Desa mandiri, sejahtera, dan berdaya.<br><br>
          <strong>Misi:</strong> Pelayanan prima, pembangunan berkelanjutan, dan pemberdayaan potensi lokal.
        </p>
      </div>
    </div>
  </div>
</section>


<hr style="width: 50%; border-top: 4px solid #2E8B57; margin-left: auto; margin-right: 0; margin-top: 120px; margin-bottom: 80px;">
   



<!-- Struktur Desa -->
<section id="struktur" class="struktur-section py-5" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
  <div class="container text-center">
    <h3 class="struktur-title mb-3">Struktur Pemerintahan Desa</h3>
    <hr class="struktur-divider mb-4">
    <p class="struktur-desc mb-4">
      Berikut adalah struktur organisasi pemerintahan Desa Segunung yang menjalankan tugas dan fungsinya sesuai aturan.
    </p>

    <div class="struktur-image-container">
      @if($struktur && $struktur->foto)
        <img src="{{ asset('storage/' . $struktur->foto) }}" alt="Struktur Desa" class="struktur-img img-fluid rounded shadow-sm">
      @else
        <img src="{{ asset('images/struk.jpg') }}" alt="Struktur Desa" class="struktur-img img-fluid rounded shadow-sm">
      @endif
    </div>
  </div>
</section>

<hr style="width: 50%; border-top: 4px solid #2E8B57; margin-left: 0; margin-right: auto; margin-top: 120px; margin-bottom: 80px;">



<!-- Section Berita -->
<section id="berita" class="py-5 bg-light dark-mode-section" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
  <div class="container">
    <div class="section-title mb-4 text-center">
    <h3 class="fw-bold" style="color: #28a745;">Berita Desa</h3>


      <hr class="mx-auto" style="width: 100px; border-top: 3px solid #28a745;">
    </div>

    <div class="row">
      @foreach($berita->take(3) as $item)
      <div class="col-md-4 mb-4">
        <div class="card card-berita border border-success h-100 d-flex flex-column justify-content-between bg-white dark-mode-box">
          <img src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : asset('images/default-news.jpg') }}"
               class="card-img-top" alt="{{ $item->judul }}" style="height: 200px; object-fit: cover;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title text-success">{{ \Illuminate\Support\Str::limit($item->judul, 50) }}</h5>

            <small class="text-muted mb-2">
              <i class="fas fa-calendar-alt"></i>
              {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
            </small>

            <p class="card-text mb-4">{{ \Illuminate\Support\Str::limit(strip_tags($item->konten), 80) }}</p>

            <!-- Tombol berada di tengah -->
            <div class="text-center mt-auto">
              <a href="{{ route('berita.show', $item->id) }}" class="btn btn-sm btn-outline-success">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    @if($berita->count() > 3)
   <div class="text-center btn-berita-lainnya mb-5">
  <button class="btn btn-success px-4 py-2" data-toggle="modal" data-target="#modalBeritaLainnya">Lihat Berita Lainnya</button>
</div>


    @endif
  </div>
</section>





<!-- Modal Semua Berita Desa -->
<div class="modal fade" id="modalBeritaLainnya" tabindex="-1" role="dialog" aria-labelledby="beritaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="beritaModalLabel">Semua Berita Desa</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body py-4 px-3" style="background-color: #f9f9f9; max-height: 80vh; overflow-y: auto;">
        @foreach($berita as $item)
        <div class="d-flex flex-column flex-md-row align-items-start mb-4 p-3 shadow-sm bg-white border border-success rounded"
             style="gap: 20px; max-width: 100%;">

          <!-- Gambar -->
          <div style="width: 220px; flex-shrink: 0;">
            <img src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : asset('images/default-news.jpg') }}"
                 alt="{{ $item->judul }}"
                 class="img-fluid rounded"
                 style="height: 150px; width: 100%; object-fit: cover;">
          </div>

          <!-- Konten -->
          <div class="flex-fill">
            <h5 class="text-success">{{ $item->judul }}</h5>
            <small class="text-muted d-block mb-2">
              <i class="fas fa-calendar-alt"></i>
              {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
            </small>
            <p class="text-muted mb-2" style="font-size: 15px;">
              {{ \Illuminate\Support\Str::limit(strip_tags($item->konten), 200) }}
            </p>
            <a href="{{ route('berita.show', $item->id) }}" class="btn btn-sm btn-outline-success">
              Baca Selengkapnya
            </a>
          </div>
        </div>
        @endforeach
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>




    


<hr style="width: 50%; border-top: 4px solid #2E8B57; margin-left: auto; margin-right: 0; margin-top: 120px; margin-bottom: 80px;">






<!-- Section Pengumuman Terbaru -->
<section id="pengumuman" class="pengumuman-section py-5" style="margin-top: 80px;" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
  <div class="container">
    <h3 class="text-center fw-bold text-success">Pengumuman Terbaru</h3>
    <hr class="mx-auto" style="width: 60px; border-top: 3px solid #2E8B57; margin-bottom: 30px;">

    <div class="row">
      @forelse ($pengumuman->take(4) as $item)
      <div class="col-sm-6 mb-4">
        <div class="panel p-3 rounded shadow-sm bg-white dark-mode-box">
          <div class="panel-heading px-3 py-2 rounded-top" style="background-color: #2E8B57; color: white;">
            <i class="fas fa-bullhorn"></i>
            <strong>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</strong>
          </div>
          <div class="panel-body mt-2">
            <h4 class="fw-bold text-success">{{ $item->judul }}</h4>
            <p class="text-secondary dark-text">{{ \Illuminate\Support\Str::limit($item->isi, 100) }}</p>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12 text-center">
        <p>Belum ada pengumuman.</p>
      </div>
      @endforelse
    </div>

    @if ($pengumuman->count() > 4)
    <div class="text-center mt-5 mb-4">
      <button class="btn btn-success btn-sm px-3 py-2"  style="margin-top: 50px;"
 data-toggle="modal" data-target="#modalPengumumanLainnya">
        Lihat Pengumuman Lainnya
      </button>
    </div>
    @endif
  </div>
</section>


<!-- Modal Semua Pengumuman -->
<div class="modal fade" id="modalPengumumanLainnya" tabindex="-1" role="dialog" aria-labelledby="pengumumanModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="pengumumanModalLabel">Semua Pengumuman</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" style="background-color: #f9f9f9;">
        @foreach($pengumuman as $item)
        <div class="media p-4 mb-4 shadow-sm bg-white rounded" style="min-height: 150px; border-left: 5px solid #2E8B57;">
          <div class="media-body">
            <h5 class="text-success mb-2">
              <i class="fas fa-bullhorn mr-2"></i>{{ $item->judul }}
            </h5>
            <small class="text-muted d-block mb-2">
              {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
            </small>
            <p class="text-muted" style="font-size: 16px;">
              {{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 200) }}
            </p>
          </div>
        </div>
        @endforeach
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<hr style="width: 50%; border-top: 4px solid #2E8B57; margin-left: 0; margin-right: auto; margin-top: 120px; margin-bottom: 80px;">






<!-- Kegiatan Swipe Only -->
<section id="kegiatan" class="py-5 kegiatan-section" style="color: #28a745; margin-top: 80px;" data-aos="fade-up" data-aos-duration="1000">
  <div class="container">
    <div class="section-title text-center mb-4">
      <h3 class="fw-bold text-success" style="color: #28a745;">Kegiatan Desa</h3>
      <div class="section-divider" style="width: 60px; height: 3px; background-color: #2E8B57; margin: 0 auto 20px;"></div>
    </div>

    @if($kegiatan->count())
    <div class="swiper kegiatanSwiper">
      <div class="swiper-wrapper">
        @foreach($kegiatan as $item)
        <div class="swiper-slide">
          <div class="card kegiatan-card shadow-sm border border-success h-100 bg-white dark-mode-box">
            <div style="position: relative; width: 100%; padding-top: 75%; overflow: hidden; border-top-left-radius: 8px; border-top-right-radius: 8px;">
              <img src="{{ asset('storage/kegiatan/' . $item->gambar) }}"
                   class="img-fluid"
                   style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;"
                   alt="{{ $item->judul }}">
            </div>
            <div class="card-body d-flex flex-column">
              <h6 class="card-title text-success fw-bold">{{ $item->judul }}</h6>
              <small class="text-muted mt-auto">
                <i class="fas fa-calendar-alt"></i>
                {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
              </small>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Pagination -->
      <div class="swiper-pagination mt-4"></div>
    </div>
    @else
    <p class="text-muted text-center">Tidak ada data kegiatan tersedia.</p>
    @endif
  </div>
</section>

<hr style="width: 50%; border-top: 4px solid #2E8B57; margin-left: auto; margin-right: 0; margin-top: 120px; margin-bottom: 80px;">




<!-- Video Profil Desa -->
<section id="video" class="video-section py-5" data-aos="zoom-in">
  <div class="container">
    <h3 class="text-center fw-bold text-success">Video Profil Desa</h3>
    <hr class="mx-auto video-divider">

     <div class="mb-5">
      {{-- YouTube Video --}}
      <div style="position: relative; padding-bottom: 35%; height: 0; overflow: hidden; max-width: 700px; margin: 0 auto; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        <iframe 
          src="https://www.youtube.com/embed/fAtFsQPxkPI"  
          frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen 
          style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 12px;">
        </iframe>
      </div>
    </div>
  </div>
</section>

<hr style="width: 50%; border-top: 4px solid #2E8B57; margin-left: 0; margin-right: auto; margin-top: 120px; margin-bottom: 80px;">


<!-- Peta Lokasi Desa -->
<section id="peta" class="peta-section" data-aos="fade-up">
  <div class="container">
    <h3 class="text-center">Peta Lokasi Desa Segunung</h3>
    <hr>

    <div class="map-wrapper">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3334163178593!2d112.4812989!3d-7.5851185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7873cb068131d5%3A0xbf9367839967c5fd!2sSegunung%2C%20Kec.%20Dlanggu%2C%20Kabupaten%20Mojokerto%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1720281749507!5m2!1sid!2sid" 
        allowfullscreen 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>









<footer id="kontak" class="footer-section">
  <div class="container">
    <p>Desa Segunung</p>
    <p>Jl. Raya Segunung No. 123, Kabupaten Mojokerto</p>
    <p>
      Email: <a href="mailto:info@desasegunung.id">info@desasegunung.id</a> |
      Telp: <a href="tel:02112345678">(021) 12345678</a>
    </p>

    <div class="social-icons" style="margin: 20px 0;">
      <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
      <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
      <a href="#"><i class="fab fa-whatsapp fa-lg"></i></a>
    </div>

    <hr>

    <p class="copyright">&copy; 2025 Desa Segunung. Hak cipta dilindungi undang-undang.</p>
  </div>
</footer>





<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
  $(document).ready(function () {
    // Carousel auto-slide
    $('#myCarousel').carousel({
      interval: 3000,
      pause: false,
      wrap: true
    });

    // Tombol Profil & Visi
    $('.btn-group a').click(function (e) {
      e.preventDefault();
      var target = $(this).attr('href');
      $('#content-profil, #content-visi').hide();
      $(target).fadeIn(300);
      $('.btn-group a').removeClass('btn-success').addClass('btn-default');
      $(this).removeClass('btn-default').addClass('btn-success');
    });

    // Dark Mode Toggle
    if (localStorage.getItem('dark-mode') === 'enabled') {
      $('body').addClass('dark-mode');
      $('#darkModeToggle').prop('checked', true);
    }

    $('#darkModeToggle').on('change', function () {
      if ($(this).is(':checked')) {
        $('body').addClass('dark-mode');
        localStorage.setItem('dark-mode', 'enabled');
      } else {
        $('body').removeClass('dark-mode');
        localStorage.setItem('dark-mode', 'disabled');
      }
    });

    // Init AOS
    AOS.init({
      duration: 1000,
      once: false
    });
  });

  const swiper = new Swiper('.kegiatanSwiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: false,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      576: { slidesPerView: 2 },
      768: { slidesPerView: 3 },
      992: { slidesPerView: 4 },
      1200: { slidesPerView: 5 },
    }
  });
</script>

 
  




</body>
</html>
