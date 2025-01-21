<?php
$host = '127.0.0.1';
$user = 'root';
$password = 'xamon';
$database = 'db_lelang_xamon';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
