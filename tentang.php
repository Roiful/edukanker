<?php
session_start();
include 'koneksi.php';
include 'header.php';
?>

<section class="section">
    <div class="container">
        <h2 class="section-title">Tentang Kanker Payudara</h2>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/5452201/pexels-photo-5452201.jpeg" alt="Kanker Payudara" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h3 style="color: var(--dark-pink);">Apa Itu Kanker Payudara?</h3>
                <p>Kanker payudara adalah pertumbuhan sel yang tidak terkontrol pada jaringan payudara. Kanker ini dapat menyebar ke bagian tubuh lain jika tidak ditangani sejak dini.</p>
                <p>Kanker payudara adalah jenis kanker paling umum yang diderita wanita di seluruh dunia, namun pria juga dapat mengalaminya meskipun kasusnya jarang.</p>
                <p>Deteksi dini sangat penting untuk meningkatkan peluang kesembuhan. Pemeriksaan payudara sendiri (SADARI) dan mammogram rutin adalah langkah preventif yang efektif.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card-custom">
                    <i class="fas fa-exclamation-triangle fa-3x mb-3" style="color: var(--dark-pink);"></i>
                    <h4>Faktor Risiko</h4>
                    <ul>
                        <li>Usia di atas 50 tahun</li>
                        <li>Riwayat keluarga dengan kanker payudara</li>
                        <li>Mutasi genetik (BRCA1, BRCA2)</li>
                        <li>Menopause terlambat</li>
                        <li>Obesitas dan gaya hidup tidak sehat</li>
                        <li>Paparan radiasi</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card-custom">
                    <i class="fas fa-search fa-3x mb-3" style="color: var(--dark-pink);"></i>
                    <h4>Gejala dan Deteksi Dini</h4>
                    <ul>
                        <li>Benjolan pada payudara atau ketiak</li>
                        <li>Perubahan ukuran atau bentuk payudara</li>
                        <li>Keluar cairan dari puting</li>
                        <li>Kulit payudara yang mengerut atau berubah warna</li>
                        <li>Nyeri pada payudara yang tidak hilang</li>
                        <li>Lakukan SADARI setiap bulan</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card-custom">
                    <i class="fas fa-shield-virus fa-3x mb-3" style="color: var(--dark-pink);"></i>
                    <h4>Pencegahan</h4>
                    <ul>
                        <li>Maintain berat badan ideal</li>
                        <li>Olahraga rutin minimal 30 menit/hari</li>
                        <li>Limit konsumsi alkohol</li>
                        <li>Diet sehat dengan banyak buah dan sayur</li>
                        <li>Hindari merokok</li>
                        <li>Breastfeeding jika memungkinkan</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card-custom">
                    <i class="fas fa-hospital fa-3x mb-3" style="color: var(--dark-pink);"></i>
                    <h4>Metode Diagnosis</h4>
                    <ul>
                        <li>Mammogram</li>
                        <li>USG Payudara</li>
                        <li>MRI Payudara</li>
                        <li>Biopsi</li>
                        <li>Genetic Testing</li>
                        <li>Blood Marker Tests</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>