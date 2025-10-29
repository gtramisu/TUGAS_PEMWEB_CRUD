<?php
require '../config/database.php';

$result = mysqli_query($conn, "SELECT * FROM produk_robux ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Robuxify</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/png" href="../rocket.png">
</head>
<body>
    <header class="header">
        <h1>Robuxify</h1>
        <nav class="navbar">
            <a href="../index.php">🏠 Beranda</a>
            <a href="../beli1.php">🛒 Beli Robux</a>
            <a href="../cek-pesanan.php">📦 Cek Pesanan</a>
            <a href="../bantuan.php">❓ Bantuan</a>
            <a href="daftarproduk.php" class="active">📊 Kelola Produk</a>
        </nav>
        <button id="theme-toggle" class="btn btn-secondary">☀️ Mode Gelap</button>
    </header>

    <main>
        <section class="card text-center">
            <h2>📦 Daftar Produk Robux</h2>
            <p>Kelola produk Robuxify kamu — tambah, ubah, atau hapus sesuai kebutuhan!</p>
            <a href="tambahproduk.php" class="btn btn-primary" style="margin-top:10px;">➕ Tambah Produk</a>

            <table class="order-table" style="margin-top:20px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Jumlah Robux</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th>Tanggal Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($result) > 0): ?>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['jumlah_robux']; ?></td>
                                <td>Rp<?= number_format($row['harga'], 0, ',', '.'); ?></td>
                                <td><?= htmlspecialchars($row['keterangan']); ?></td>
                                <td><?= $row['created_at']; ?></td>
                                <td>
                                    <a href="editproduk.php?id=<?= $row['id']; ?>" class="btn btn-secondary">✏️ Edit</a>
                                    <a href="hapusproduk.php?id=<?= $row['id']; ?>" class="btn btn-secondary" onclick="return confirm('Yakin ingin menghapus produk ini?')">🗑️ Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">Belum ada produk 😅</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>© 2025 Robuxify</p>
    </footer>

    <script src="../script.js"></script>
</body>
</html>
