<?php
session_start();
include 'koneksi.php';

if(isset($_SESSION['user'])) {
    header("Location: index.php");
}

 $error = '';
 $success = '';
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    
    // Check if passwords match
    if($pass != $cpass) {
        $error = "Password tidak cocok";
    } else {
        // Check if username exists
        $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
        if(mysqli_num_rows($cek) > 0) {
            $error = "Username sudah digunakan";
        } else {
            // Insert new user
            $insert = mysqli_query($koneksi, "INSERT INTO users (username, password, email, nama_lengkap) VALUES ('$username', '$pass', '$email', '$nama')");
            if($insert) {
                $success = "Registrasi berhasil! Silakan login.";
            } else {
                $error = "Registrasi gagal. Silakan coba lagi.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - EduKanker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-5">
                <div class="card-custom">
                    <div class="text-center mb-4">
                        <i class="fas fa-ribbon fa-3x" style="color: var(--dark-pink);"></i>
                        <h3 class="mt-3">Register</h3>
                    </div>
                    
                    <?php if($error) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                    <?php } ?>
                    
                    <?php if($success) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $success; ?>
                    </div>
                    <?php } ?>
                    
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" name="cpassword" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" name="register" class="btn-primary-custom w-100">
                            <i class="fas fa-user-plus"></i> Register
                        </button>
                    </form>
                    
                    <div class="text-center mt-3">
                        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>