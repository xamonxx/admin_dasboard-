<?php
include 'config/db.php';

$query = "SELECT * FROM barang";
$result = mysqli_query($conn, $query);

$barang = [];
while ($row = mysqli_fetch_assoc($result)) {
    $barang[] = $row; // Simpan data barang ke dalam array
}
?>
