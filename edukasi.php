<?php
session_start();
include 'koneksi.php';
include 'header.php';
?>

<section class="section">
    <div class="container">
        <h2 class="section-title">Edukasi Visual</h2>
        <p class="text-center mb-5">Infografik dan materi visual untuk pemahaman yang lebih baik tentang kanker payudara</p>
        
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1606207553727-275e0b36a84f" alt="Deteksi Dini">
                <div class="gallery-overlay">
                    <h4>Deteksi Dini</h4>
                    <p>Panduan lengkap melakukan pemeriksaan payudara sendiri (SADARI)</p>
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="https://images.pexels.com/photos/3825529/pexels-photo-3825529.jpeg" alt="Stadium Kanker">
                <div class="gallery-overlay">
                    <h4>Stadium Kanker Payudara</h4>
                    <p>Pemahaman tentang stadium 0-IV dan implikasinya</p>
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef" alt="Treatment Options">
                <div class="gallery-overlay">
                    <h4>Opsi Pengobatan</h4>
                    <p>Berbagai metode pengobatan yang tersedia</p>
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="https://images.pexels.com/photos/3184432/pexels-photo-3184432.jpeg" alt="Support System">
                <div class="gallery-overlay">
                    <h4>Sistem Dukungan</h4>
                    <p>Pentingnya dukungan keluarga dan komunitas</p>
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56" alt="Nutrition">
                <div class="gallery-overlay">
                    <h4>Nutrisi Pencegahan</h4>
                    <p>Makanan yang membantu mengurangi risiko kanker</p>
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d" alt="Exercise">
                <div class="gallery-overlay">
                    <h4>Olahraga dan Kesehatan</h4>
                    <p>Manfaat olahraga untuk pencegahan kanker</p>
                </div>
            </div>
        </div>

        <!-- Download Section -->
        <div class="text-center mt-5">
            <div class="card-custom d-inline-block p-4">
                <h4 class="mb-3">Unduh Materi Edukasi</h4>
                <p class="mb-4">Dapatkan panduan lengkap dalam format PDF</p>
                <a href="#" class="btn-primary-custom me-3">
                    <i class="fas fa-download"></i> Panduan SADARI
                </a>
                <a href="#" class="btn-primary-custom">
                    <i class="fas fa-download"></i> Infografik Lengkap
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>