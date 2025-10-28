<?php
session_start();
include 'koneksi.php';
include 'header.php';
?>

<section class="section">
    <div class="container">
        <h2 class="section-title">Hubungi Kami</h2>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card-custom">
                    <h4 class="mb-4">Kirim Pesan</h4>
                    <form action="proses_kontak.php" method="POST">
                        <input type="text" name="nama" class="form-control-custom" placeholder="Nama Lengkap" required>
                        <input type="email" name="email" class="form-control-custom" placeholder="Email" required>
                        <textarea name="pesan" class="form-control-custom" rows="5" placeholder="Pesan Anda" required></textarea>
                        <button type="submit" name="submit" class="btn-primary-custom w-100">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card-custom">
                    <h4 class="mb-4">Informasi Kontak</h4>
                    <div class="mb-3">
                        <i class="fas fa-map-marker-alt me-2" style="color: var(--dark-pink);"></i>
                        <strong>Alamat:</strong><br>
                        Jl. Suwawal timur No. 123<br>
                        Jepara, jawa Tengah 12345
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-phone me-2" style="color: var(--dark-pink);"></i>
                        <strong>Telepon:</strong><br>
                        +62 21 1234 5678
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-envelope me-2" style="color: var(--dark-pink);"></i>
                        <strong>Email:</strong><br>
                        info@edukanker.org
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-clock me-2" style="color: var(--dark-pink);"></i>
                        <strong>Jam Operasional:</strong><br>
                        Senin - Jumat: 08:00 - 17:00<br>
                        Sabtu: 08:00 - 12:00
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="card-custom mt-4">
            <h4 class="mb-3">Lokasi Kami</h4>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13523.444262661269!2d110.71133660605594!3d-6.566932690510409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7121fb7c4cb4fd%3A0xfab01e59e2ddf72b!2sPasar%20Suwawal!5e1!3m2!1sid!2sid!4v1761666780459!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>