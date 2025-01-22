<?php
include 'config/db.php';

if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];

    // Query untuk menghapus user berdasarkan id_user
    $query = "DELETE FROM user WHERE id_user = $id_user";
    if (mysqli_query($conn, $query)) {
        header("Location: data_users.php?status=sukses&pesan=User berhasil dihapus");
    } else {
        header("Location: data_users.php?status=gagal&pesan=" . urlencode("Gagal menghapus user: " . mysqli_error($conn)));
    }
} else {
    header("Location: data_users.php?status=gagal&pesan=" . urlencode("ID user tidak ditemukan"));
}
?>
