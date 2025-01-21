<?php
include 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_barang = $_POST['nama_barang'];
    $tanggal = $_POST['tanggal'];
    $harga_awal = $_POST['harga_awal'];
    $deskripsi = $_POST['deskripsi'];

    $query = "INSERT INTO barang (nama_barang, tanggal, harga_awal, deskripsi) VALUES ('$nama_barang', '$tanggal', '$harga_awal', '$deskripsi')";
    if (mysqli_query($conn, $query)) {
        header("Location:data_barang.php?status=sukses");
    } else {
        header("Location:data_barang.php?status=gagal&error=" . urlencode(mysqli_error($conn)));
    }
}
?>