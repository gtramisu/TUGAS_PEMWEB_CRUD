<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cek Pesanan - Robuxify</title>

    <link rel="icon" type="image/png" href="rocket.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <h1>Robuxify</h1>
        <nav class="navbar">
            <a href="index.php">🏠 Beranda</a>
            <a href="beli1.php">🛒 Beli Robux</a>
            <a href="cek-pesanan.php">📦 Cek Pesanan</a>
            <a href="bantuan.php">❓ Bantuan</a>
        </nav>
        <button id="theme-toggle" class="btn btn-secondary">☀️ Mode Gelap</button>
    </header>

    <main class="text-center">
        <h2>📦 Cek Status Pesanan Anda</h2>
        
        <div class="form-card mt-2">
            <form>
                <div class="form-group">
                    <label for="email">✉️ Masukkan Email:</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email yang terdaftar">
                </div>
                <a href="index.html" class="btn btn-primary">Cek Pesanan</a>
            </form>
        </div>
    </main>

    <footer>
        <p>© 2025 Robuxify</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>