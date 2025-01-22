<?php
include 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
    $no_telp = $_POST['no_telp'];
    $role = $_POST['role']; // Ambil input role dari form

    // Query untuk menambahkan user baru
    $query = "INSERT INTO user (nama_lengkap, username, password, no_telp, role) VALUES ('$nama_lengkap', '$username', '$password', '$no_telp', '$role')";

    if (mysqli_query($conn, $query)) {
        // Redirect ke halaman login dengan pesan sukses
        header("Location: login.php?status=sukses");
        exit;
    } else {
        // Redirect ke halaman register dengan pesan gagal
        header("Location: register.php?status=gagal&pesan=" . urlencode(mysqli_error($conn)));
        exit;
    }
}
?>