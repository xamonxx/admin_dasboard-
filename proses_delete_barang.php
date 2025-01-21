<?php
include 'config/db.php';

// Validasi jika ada parameter id_barang
if (isset($_GET['id_barang'])) {
    $id_barang = $_GET['id_barang'];

    // Query untuk menghapus data berdasarkan id_barang
    $query = "DELETE FROM barang WHERE id_barang = $id_barang";
    if (mysqli_query($conn, $query)) {
        // Redirect kembali ke halaman daftar barang dengan pesan sukses
        header("Location: data_barang.php?status=sukses&pesan=Barang berhasil dihapus");
    } else {
        // Redirect kembali dengan pesan error
        header("Location: data_barang.php?status=gagal&pesan=" . urlencode("Gagal menghapus barang: " . mysqli_error($conn)));
    }
} else {
    // Redirect jika id_barang tidak ada
    header("Location: data_barang.php?status=gagal&pesan=" . urlencode("ID Barang tidak ditemukan"));
}
?>
