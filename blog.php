<?php
session_start();
include 'koneksi.php';
include 'header.php';

// Search functionality
 $search = isset($_GET['q']) ? mysqli_real_escape_string($koneksi, $_GET['q']) : '';

// Build query
 $query = "SELECT * FROM blog WHERE 1=1";
if($search) {
    $query .= " AND (judul LIKE '%$search%' OR isi LIKE '%$search%')";
}
 $query .= " ORDER BY tanggal DESC";

 $result = mysqli_query($koneksi, $query);
?>

<section class="section">
    <div class="container">
        <h2 class="section-title">Blog & Berita</h2>
        
        <!-- Search Box -->
        <div class="search-box">
            <form method="GET" action="blog.php">
                <input type="text" name="q" placeholder="Cari artikel..." value="<?php echo $search; ?>">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <!-- Blog Posts -->
        <div class="row">
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-6 mb-4">
                <div class="card-custom">
                    <img src="<?php echo $row['gambar']; ?>" alt="<?php echo $row['judul']; ?>">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-primary"><?php echo $row['kategori']; ?></span>
                        <small class="text-muted"><?php echo date('d M Y', strtotime($row['tanggal'])); ?></small>
                    </div>
                    <h4><?php echo $row['judul']; ?></h4>
                    <p><?php echo substr($row['isi'], 0, 150) . '...'; ?></p>
                    <a href="blog-detail.php?id=<?php echo $row['id']; ?>" class="btn-primary-custom">Baca Selengkapnya</a>
                </div>
            </div>
            <?php } ?>
        </div>

        <?php if(mysqli_num_rows($result) == 0) { ?>
        <div class="text-center">
            <p>Tidak ada artikel yang ditemukan.</p>
        </div>
        <?php } ?>
    </div>
</section>

<?php include 'footer.php'; ?>