<?php
// Daftar gedung beserta harga sewanya per malam dan gambar terkait
$gedung = [
    ["VIP", 50000000, "vip.png"],     // Gedung VIP, harga Rp 50.000.000, gambar 'vip.png'
    ["Ballroom", 70000000, "ballroom.png"],  // Gedung Ballroom, harga Rp 70.000.000, gambar 'ballroom.png'
    ["Outdoor", 40000000, "outdoor.png"]  // Gedung Outdoor, harga Rp 40.000.000, gambar 'outdoor.png'
];
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8"> <!-- Menetapkan encoding karakter ke UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Membuat halaman responsif pada perangkat mobile -->
    <title>Lima Rasa</title> <!-- Judul halaman yang ditampilkan di tab browser -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Mengimpor file CSS Bootstrap untuk styling -->
    <style>
        /* CSS Styling untuk elemen-elemen halaman */

        body {
            background-color: #f5f5f5;
            /* Latar belakang halaman berwarna abu-abu muda */
            color: #333;
            /* Teks berwarna abu-abu gelap */
        }

        .navbar {
            background-color: #2f2f2f;
            /* Navbar memiliki latar belakang gelap */
        }

        .navbar-brand,
        .nav-link {
            color: #fff !important;
            /* Navbar brand dan link berwarna putih */
        }

        .navbar-nav .nav-link:hover {
            color: #d6a84e !important;
            /* Warna link berubah menjadi emas saat hover */
        }

        .product-card {
            text-align: center;
            /* Menyusun elemen di dalam card ke tengah */
            padding: 15px;
            border: 1px solid #ddd;
            /* Menambahkan border tipis abu-abu */
            border-radius: 10px;
            /* Membuat sudut card bulat */
            margin-bottom: 20px;
            background-color: #fff;
            /* Latar belakang card berwarna putih */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            /* Menambahkan bayangan ringan pada card */
            transition: transform 0.3s ease-in-out;
            /* Efek animasi saat card dihover */
        }

        .product-card:hover {
            transform: scale(1.05);
            /* Membesarkan card sedikit saat hover */
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            /* Menambahkan bayangan lebih besar saat hover */
        }

        .product-card img {
            width: 100%;
            /* Membuat gambar memenuhi lebar card */
            height: 200px;
            object-fit: cover;
            /* Menjaga aspek rasio gambar */
            border-radius: 10px;
            /* Membuat sudut gambar bulat */
        }

        .carousel-item img {
            height: 450px;
            /* Menetapkan tinggi gambar carousel */
            object-fit: cover;
            /* Menjaga gambar tidak terdistorsi */
        }

        .pesan-btn-container {
            text-align: center;
            /* Menyusun tombol pesan di tengah */
            margin-top: 20px;
        }

        .btn-dark {
            background-color: #4a2e1b;
            /* Tombol dengan latar belakang coklat */
            border-color: #4a2e1b;
        }

        .btn-dark:hover {
            background-color: #3d2414;
            /* Warna tombol berubah lebih gelap saat hover */
            border-color: #3d2414;
        }

        .card {
            border: none;
            /* Menghapus border pada card */
            border-radius: 15px;
            /* Menambahkan sudut melengkung pada card */
        }

        .card-body {
            background-color: #2e2e2e;
            /* Latar belakang card-body berwarna gelap */
            color: #fff;
            /* Teks berwarna putih */
            padding: 30px;
            /* Memberikan padding pada card-body */
        }

        .footer {
            background-color: #2f2f2f;
            /* Latar belakang footer berwarna gelap */
            color: #fff;
            /* Teks footer berwarna putih */
            padding: 20px;
            /* Memberikan padding pada footer */
        }

        .carousel-caption h5,
        .carousel-caption p {
            background-color: rgba(0, 0, 0, 0.5);
            /* Memberikan background transparan hitam pada teks caption */
            border-radius: 5px;
            /* Membuat sudut caption bulat */
            padding: 10px;
            /* Memberikan padding pada teks caption */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark"> <!-- Navbar dengan kelas dark untuk tema gelap -->
        <div class="container">
            <a class="navbar-brand" href="#">Lima Rasa</a> <!-- Nama brand yang muncul di navbar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li> <!-- Link ke bagian Produk -->
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Kami</a></li> <!-- Link ke bagian Tentang Kami -->
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide"> <!-- Carousel untuk menampilkan gambar-gambar gedung -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> <!-- Indikator untuk slide pertama -->
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button> <!-- Indikator untuk slide kedua -->
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> <!-- Indikator untuk slide ketiga -->
        </div>
        <div class="carousel-inner">
            <!-- Slide pertama carousel untuk gambar VIP -->
            <div class="carousel-item active">
                <img src="img/vip.png" class="d-block w-100" alt="VIP">
                <div class="carousel-caption d-none d-md-block">
                    <h5>VIP</h5> <!-- Nama gedung -->
                    <p>Rp. 50.000.000 /malam</p> <!-- Harga sewa gedung per malam -->
                </div>
            </div>
            <!-- Slide kedua carousel untuk gambar Ballroom -->
            <div class="carousel-item">
                <img src="img/ballroom.png" class="d-block w-100" alt="Ballroom">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ballroom</h5> <!-- Nama gedung -->
                    <p>Rp. 70.000.000</p> <!-- Harga sewa gedung per malam -->
                </div>
            </div>
            <!-- Slide ketiga carousel untuk gambar Outdoor -->
            <div class="carousel-item">
                <img src="img/outdoor.png" class="d-block w-100" alt="Outdoor">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Outdoor</h5> <!-- Nama gedung -->
                    <p>Rp. 40.000.000</p> <!-- Harga sewa gedung per malam -->
                </div>
            </div>
        </div>
        <!-- Tombol navigasi carousel (sebelumnya dan selanjutnya) -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5">
        <section id="produk"> <!-- Bagian produk yang menampilkan jenis gedung -->
            <h2 class="text-center">Jenis Gedung</h2>
            <div class="row">
                <!-- Looping melalui array $gedung untuk menampilkan setiap gedung -->
                <!-- foreach utk Mengulangi setiap elemen dalam array $gedung, $gedung_item digunakan untuk menyimpan setiap elemen array yang sedang diproses di dalam loop. -->
                <?php foreach ($gedung as $gedung_item) { ?>
                    <div class="col-md-4"> <!-- Membuat kolom untuk setiap gedung -->
                        <div class="product-card">
                            <img src="img/<?= $gedung_item[2] ?>" alt="<?= $gedung_item[0] ?>"> <!-- Menampilkan gambar gedung -->
                            <h5 class="mt-2"> <?= $gedung_item[0] ?> </h5> <!-- Menampilkan nama gedung -->
                            <h5 class="mt-2">Rp <?= number_format($gedung_item[1], 0, ',', '.') ?></h5> <!-- Menampilkan harga sewa gedung -->
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>

    <div class="pesan-btn-container">
        <a href="transaksi.php" class="btn btn-lg btn-dark">Pesan Sekarang</a> <!-- Tombol untuk melakukan pemesanan dengan mengarahkan ke transaksi.php -->
    </div>

    <!-- menampilkan video -->
    <div class="container mt-4 text-center">
        <h3>Video Koleksi kami VIP</h3>
        <video width="100%" controls>
            <source src="vid/vip.mp4" type="video/mp4">
            Browser Anda tidak mendukung tag video.
        </video>
    </div>

    <!-- Footer atau tentang kami -->
    <div class="container mt-5">
        <section id="tentang">
            <div class="card shadow-lg">
                <div class="card-body text-center">
                    <h2 class="card-title">Tentang Kami</h2>
                    <p class="card-text">Selamat datang di <strong>Gedung Limarasa</strong>, tempat penyewaan gedung terbaik untuk acara Anda.</p>
                    <p class="card-text">Kami menawarkan berbagai pilihan gedung, seperti VIP, Ballroom, dan Outdoor, dengan harga kompetitif dan fasilitas lengkap.</p>
                    <hr>
                    <h5>Hubungi Kami</h5>
                    <p><strong> Alamat:</strong> Jalan Ayani km 3</p>
                    <p><strong> Telepon:</strong> <a href="tel:+62895383875089">+62895383875089</a></p>
                    <p><strong> Email:</strong> <a href="mailto:rentalkami@gmail.com">LimaRasa@gmail.com</a></p>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer text-white text-center py-3 mt-5">
        <p>&copy; 2025 Gedung Limarasa.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>