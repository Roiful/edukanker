<?php
session_start();
include 'koneksi.php';
include 'header.php';
?>

<section class="section">
    <div class="container">
        <h2 class="section-title">Tentang Kami</h2>
        
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/3184432/pexels-photo-3184432.jpeg" alt="Tim Kami" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h3 style="color: var(--dark-pink);">Visi & Misi</h3>
                <p><strong>Visi:</strong> Menjadi platform edukasi terdepan dalam meningkatkan kesadaran kesehatan payudara di Indonesia.</p>
                <p><strong>Misi:</strong></p>
                <ul>
                    <li>Menyediakan informasi akurat dan terpercaya tentang kanker payudara</li>
                    <li>Meningkatkan kesadaran akan pentingnya deteksi dini</li>
                    <li>Menyediakan portal penelitian untuk para profesional kesehatan</li>
                    <li>Membangun komunitas pendukung bagi pasien dan keluarga</li>
                </ul>
            </div>
        </div>

        <h3 class="text-center mb-4" style="color: var(--dark-pink);">Tim Kami</h3>
        <div class="row">
         
            <div class="col-md-3 mb-4">
                <div class="team-card">
                    <img src="" alt="">
                    <h4>-</h4>
                    <p>Peneliti</p>
                    <p>Fokus pada terapi target dan imunoterapi</p>
                </div>
            </div>
            <!-- <div class="col-md-3 mb-4">
                <div class="team-card">
                    <img src="" alt="">
                    <h4>-</h4>
                    <p>Psikolog Klinis</p>
                    <p>Dukungan mental untuk pasien dan keluarga</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="team-card">
                    <img src="" alt="">
                    <h4>-</h4>
                    <p>Epidemiolog</p>
                    <p>Analisis data dan statistik kanker payudara</p>
                </div>
            </div> -->
        </div>

        <div class="card-custom mt-5">
            <h4 class="mb-3">Sumber Data</h4>
            <p>Informasi yang kami sajikan bersumber dari:</p>
            <ul>
                <li>World Health Organization (WHO)</li>
                <li>Kementerian Kesehatan Republik Indonesia</li>
                <li>American Cancer Society</li>
                <li>Journal of Clinical Oncology</li>
                <li>National Cancer Institute (NCI)</li>
                <li>Penelitian peer-reviewed terkini</li>
            </ul>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>