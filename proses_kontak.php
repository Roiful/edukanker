<?php
if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);
    
    $to = "info@edukanker.org";
    $subject = "Pesan dari Kontak Form - " . $nama;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    $body = "Nama: " . $nama . "\n";
    $body .= "Email: " . $email . "\n\n";
    $body .= "Pesan:\n" . $pesan;
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>
            alert('Pesan berhasil dikirim! Kami akan segera menghubungi Anda.');
            window.location='kontak.php';
        </script>";
    } else {
        echo "<script>
            alert('Maaf, terjadi kesalahan. Silakan coba lagi.');
            window.location='kontak.php';
        </script>";
    }
}
?>