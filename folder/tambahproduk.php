<?php
require '../config/database.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama', '$harga', '$stok')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Produk berhasil ditambahkan!'); window.location='daftarproduk.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan produk: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Robuxify</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header class="header">
        <h1>Tambah Produk</h1>
        <nav class="navbar">
            <a href="daftarproduk.php">⬅️ Kembali</a>
        </nav>
    </header>

    <main>
        <section class="form-card">
            <form method="POST">
                <div class="form-group">
                    <label for="nama_produk">Nama Produk:</label>
                    <input type="text" id="nama_produk" name="nama_produk" required>
                </div>

                <div class="form-group">
                    <label for="harga">Harga (Rp):</label>
                    <input type="number" id="harga" name="harga" required>
                </div>

                <div class="form-group">
                    <label for="stok">Stok:</label>
                    <input type="number" id="stok" name="stok" required>
                </div>

                <button type="submit" name="simpan" class="btn btn-primary">💾 Simpan Produk</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2025 Robuxify</p>
    </footer>
</body>
</html>
