<?php
include '../config/database.php';

if (!isset($_GET['id'])) {
    die("⚠️ ID produk tidak ditemukan!");
}

$id = $_GET['id'];

$query = "DELETE FROM produk_robux WHERE id = '$id'";
mysqli_query($conn, $query);

header("Location: daftarproduk.php");
exit;
?>
