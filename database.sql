CREATE DATABASE db_kanker_payudara;
USE db_kanker_payudara;

CREATE TABLE artikel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    ringkasan TEXT NOT NULL,
    konten TEXT NOT NULL,
    tanggal DATE NOT NULL,
    gambar VARCHAR(255)
);

CREATE TABLE penelitian (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    tahun INT NOT NULL,
    metode VARCHAR(100) NOT NULL,
    hasil TEXT NOT NULL,
    link_doi VARCHAR(255)
);

CREATE TABLE blog (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    kategori VARCHAR(100) NOT NULL,
    isi TEXT NOT NULL,
    tanggal DATE NOT NULL,
    gambar VARCHAR(255)
);

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL
);

-- Sample data
INSERT INTO artikel (judul, ringkasan, konten, tanggal, gambar) VALUES
('Deteksi Dini Kanker Payudara', 'Pentingnya deteksi dini untuk meningkatkan peluang kesembuhan', 'Konten lengkap tentang deteksi dini...', '2024-01-15', 'https://images.unsplash.com/photo-1603398938378-e54eab4466a4'),
('Faktor Risiko Kanker Payudara', 'Mengenal faktor-faktor yang meningkatkan risiko', 'Penjelasan lengkap faktor risiko...', '2024-01-20', 'https://images.unsplash.com/photo-1576091160550-2173dba999ef');

INSERT INTO penelitian (judul, tahun, metode, hasil, link_doi) VALUES
('Terapi Target Baru untuk Kanker Payudara Triple Negatif', 2023, 'Studi Klinis', 'Hasil menunjukkan efektivitas 75%', 'https://doi.org/example1'),
('Pengaruh Diet Mediterania pada Risiko Kanker Payudara', 2022, 'Kohort Prospektif', 'Penurunan risiko 30%', 'https://doi.org/example2');

INSERT INTO blog (judul, kategori, isi, tanggal, gambar) VALUES
('Kampanye Pink Ribbon 2024', 'Kampanye', 'Kampanye tahunan untuk kesadaran kanker payudara...', '2024-01-10', 'https://images.unsplash.com/photo-1576091160550-2173dba999ef'),
('Tips Menjaga Kesehatan Payudara', 'Tips Kesehatan', 'Panduan lengkap untuk menjaga kesehatan payudara...', '2024-01-05', 'https://images.unsplash.com/photo-1606207553727-275e0b36a84f');

INSERT INTO user (username, password, email, nama_lengkap) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@kankerpayudara.org', 'Administrator');