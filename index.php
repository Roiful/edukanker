<?php
session_start();
include 'koneksi.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduKanker - Bersama Lawan Kanker Payudara</title>

    <!-- Font Awesome & Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        :root {
            --pink: #f8b4c0;
            --dark-pink: #e83e8c;
            --light-gray: #f9f9f9;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(to right, #ffe6eb, #fff0f5);
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 2.2rem;
            color: var(--dark-pink);
            font-weight: bold;
        }

        .hero p {
            font-size: 1.1rem;
            margin: 20px auto;
            max-width: 600px;
        }

        .btn-primary-custom {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--dark-pink);
            color: #fff;
            border-radius: 30px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-primary-custom:hover {
            background-color: #c82368;
            color: #fff;
        }

        /* Section Style */
        .section {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            font-weight: bold;
            color: var(--dark-pink);
            margin-bottom: 40px;
        }

        /* Card Custom */
        .card-custom {
            background: #fff;
            padding: 25px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: 0.3s;
            height: 100%;
        }

        .card-custom:hover {
            transform: translateY(-5px);
        }

        .card-custom img {
            width: 100%;
            height: 200px;
            border-radius: 10px;
            object-fit: cover;
        }

        .card-custom h4 {
            margin-top: 15px;
            font-size: 1.2rem;
            color: var(--dark-pink);
        }

        /* Statistik */
        .stats-card {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .stats-card:hover {
            background-color: var(--pink);
            color: #fff;
        }

        .stats-card h3 {
            font-size: 2rem;
            font-weight: bold;
            color: var(--dark-pink);
        }
    </style>
</head>

<body>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Bersama Lawan Kanker Payudara dengan Pengetahuan dan Data</h1>
        <p>Platform edukasi dan penelitian terpercaya untuk meningkatkan kesadaran kesehatan payudara</p>
        <a href="#tentang" class="btn-primary-custom">Pelajari Lebih Lanjut →</a>
    </div>
</section>

<!-- Info Section -->
<section id="tentang" class="section">
    <div class="container">
        <h2 class="section-title">Mengapa Deteksi Dini Penting?</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card-custom">
                    <i class="fas fa-heartbeat fa-3x mb-3" style="color: var(--dark-pink);"></i>
                    <h4>Deteksi Dini</h4>
                    <p>Deteksi dini meningkatkan peluang kesembuhan hingga 90% ketika kanker ditemukan pada stadium awal.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card-custom">
                    <i class="fas fa-shield-alt fa-3x mb-3" style="color: var(--dark-pink);"></i>
                    <h4>Pencegahan</h4>
                    <p>Gaya hidup sehat dan pemeriksaan rutin dapat mengurangi risiko kanker payudara hingga 30%.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card-custom">
                    <i class="fas fa-users fa-3x mb-3" style="color: var(--dark-pink);"></i>
                    <h4>Dukungan Komunitas</h4>
                    <p>Bergabung dengan komunitas untuk mendapatkan dukungan emosional dan informasi terkini.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Artikel Terbaru -->
<section class="section" style="background-color: var(--light-gray);">
    <div class="container">
        <h2 class="section-title">Artikel Terbaru</h2>
        <div class="row">
            <?php
            $query = "SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 3";
            $result = mysqli_query($koneksi, $query);
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-md-4 mb-4">
                <div class="card-custom">
                    <img src="<?php echo $row['gambar']; ?>" alt="<?php echo $row['judul']; ?>">
                    <h4><?php echo $row['judul']; ?></h4>
                    <p><?php echo substr($row['ringkasan'], 0, 100) . '...'; ?></p>
                    <small class="text-muted"><?php echo date('d M Y', strtotime($row['tanggal'])); ?></small>
                    <br><br>
                    <a href="artikel-detail.php?id=<?php echo $row['id']; ?>" class="btn-primary-custom">Baca Selengkapnya</a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="text-center mt-4">
            <a href="blog.php" class="btn-primary-custom">Lihat Semua Artikel</a>
        </div>
    </div>
</section>

<!-- Statistik -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Data & Statistik</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <h3>2.3 Juta</h3>
                    <p>Kasus Baru per Tahun</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <h3>685.000</h3>
                    <p>Kematian per Tahun</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <h3>90%</h3>
                    <p>Peluang Kesembuhan Stadium Awal</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <h3>1/8</h3>
                    <p>Wanita Berisiko Terkena</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
