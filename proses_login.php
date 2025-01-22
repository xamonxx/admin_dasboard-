<?php
include 'config/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari user berdasarkan username
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Simpan data user ke dalam session
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
            $_SESSION['role'] = $user['role'];

            // Redirect ke index.php
            header("Location: index.php");
            exit;
        } else {
            // Redirect ke login.php dengan pesan error
            header("Location: login.php?status=gagal&pesan=" . urlencode("Password salah"));
            exit;
        }
    } else {
        // Redirect ke login.php dengan pesan error
        header("Location: login.php?status=gagal&pesan=" . urlencode("Username tidak ditemukan"));
        exit;
    }
}
?>
