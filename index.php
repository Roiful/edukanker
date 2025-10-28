<?php
session_start();
include 'koneksi.php';
include 'header.php';
?>

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
                    <h4> Pencegahan</h4>
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