<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BPJS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style-dashboard.css">
</head>
<body>

<!-- Audio (satu saja, ID unik) -->
<audio id="klikSound" src="audio/klik.mp3"></audio>
<div class="container-fluid px-0">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="NAVBAR">
        <div class="container-fluid">
            <a class="navbar-brand" href="#NAVBAR">BPJS</a>
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#member">Member</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a href="logout.php" class="btn btn-outline-danger ms-3">Logout</a>
            </div>
        </div>
    </nav>

    <!-- HOME -->
    <section id="home" class="text-center py-5">
        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif; color: #155446; font-size: clamp(48px, 8vw, 100px);">
            AYO LINDUNGI
        </h2>
        <h1 style="font-family: Georgia, 'Times New Roman', Times, serif; color: #323332; font-size: clamp(24px, 4vw, 48px);">
            KELUARGA ANDA
        </h1>
        <p class="text-muted">Selamat datang, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</p>
    </section>

    <!-- CAROUSEL -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/img1.jpeg" class="d-block w-100" alt="Care Center 165">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Care Center 165</h5>
                    <p>BPJS Kesehatan Care Center 165 merupakan kanal layanan informasi, permintaan dan pengaduan secara non tatap muka yang dapat diakses oleh peserta maupun masyarakat umum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/img2.jpeg" class="d-block w-100" alt="Pandawa">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pandawa</h5>
                    <p>Pelayanan Administrasi Melalui WhatsApp (PANDAWA) merupakan kanal layanan tanpa tatap muka dengan menggunakan media WhatsApp.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- MEMBER -->
    <section id="member" class="text-center py-4">
        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: clamp(28px, 4vw, 50px); color: #155446;">
            Tambahkan Member Anda
        </h2>
        <button class="btn btn-success mt-2" id="btnKlik" onclick="document.getElementById('klikSound').play()">
            Daftar Member Sekarang
        </button>
    </section>

    <!-- BERITA -->
    <section class="container py-4">
        <h2 class="text-center mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: clamp(28px, 4vw, 50px); color: #155446;">
            Berita Terkini
        </h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/img3.png" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <h5 class="card-title">Kolaborasi Antarlembaga, Kunci untuk Menjawab Kebutuhan Peserta BPJS Kesehatan</h5>
                        <p class="card-text">BPJS Kesehatan resmi meluncurkan 8 Program Quick Wins yang ditargetkan tuntas terlaksana dalam 100 hari kerja pertama Direksi BPJS Kesehatan baru, guna memastikan peserta Program JKN bisa direspons dengan cepat saat mengalami kendala di lapangan.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/img4.png" class="card-img-top" alt="Berita 2">
                    <div class="card-body">
                        <h5 class="card-title">BPJS Kesehatan Tegaskan Pengurusan Kepesertaan Gratis 100 Persen</h5>
                        <p class="card-text">BPJS Kesehatan menegaskan bahwa seluruh proses pengurusan kepesertaan tidak dipungut biaya alias gratis 100 persen, merespons laporan adanya oknum yang meminta pembayaran dengan mengatasnamakan BPJS Kesehatan.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/img5.png" class="card-img-top" alt="Berita 3">
                    <div class="card-body">
                        <h5 class="card-title">Jawab Kebutuhan Peserta, Direksi Baru BPJS Kesehatan Beberkan 8 Program Andalan</h5>
                        <p class="card-text">Direksi BPJS Kesehatan periode 2026–2031 meluncurkan 8 Program Quick Wins yang terdiri atas 4 Program Customer Centric dan 4 Program Collaborative, ditargetkan tuntas dalam 100 hari kerja pertama.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- FOOTER -->
<footer class="bg-primary text-white text-center p-3 mt-4">
    © 2026 Website Kelompok 3.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
