<?php
include '../config/database.php';

if (!isset($_GET['id'])) {
    die("⚠️ ID produk tidak ditemukan!");
}

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM produk_robux WHERE id = '$id'");
$produk = mysqli_fetch_assoc($result);

if (!$produk) {
    die("⚠️ Produk tidak ditemukan di database!");
}

if (isset($_POST['update'])) {
    $jumlah = $_POST['jumlah_robux'];
    $harga = $_POST['harga'];
    $ket = $_POST['keterangan'];

    $query = "UPDATE produk_robux 
              SET jumlah_robux = '$jumlah', harga = '$harga', keterangan = '$ket' 
              WHERE id = '$id'";
    mysqli_query($conn, $query);

    header("Location: daftarproduk.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk Robux</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header class="header">
        <h1>Robuxify</h1>
        <nav class="navbar">
            <a href="../index.php">🏠 Beranda</a>
            <a href="daftarproduk.php" class="active">📦 Daftar Produk</a>
        </nav>
        <button id="theme-toggle" class="btn btn-secondary">☀️ Mode Gelap</button>
    </header>

    <main>
        <section class="form-card text-center">
            <h2>✏️ Edit Produk Robux</h2>
            <form method="post" style="margin-top: 20px; text-align: left;">
                <div class="form-group">
                    <label>Jumlah Robux:</label>
                    <input type="number" name="jumlah_robux" value="<?= $produk['jumlah_robux'] ?>" required>
                </div>

                <div class="form-group">
                    <label>Harga (Rp):</label>
                    <input type="number" name="harga" value="<?= $produk['harga'] ?>" required>
                </div>

                <div class="form-group">
                    <label>Keterangan:</label>
                    <input type="text" name="keterangan" value="<?= htmlspecialchars($produk['keterangan']); ?>">
                </div>

                <div style="margin-top: 20px; display: flex; justify-content: center; gap: 10px;">
                    <button type="submit" name="update" class="btn btn-primary">💾 Simpan Perubahan</button>
                    <a href="daftarproduk.php" class="btn btn-secondary">⬅️ Kembali</a>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2025 Robuxify</p>
    </footer>

    <script src="../script.js"></script>
</body>
</html>