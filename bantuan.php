<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bantuan - Robuxify</title>

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
        <h2>❓ Pusat Bantuan</h2>
        
        <div class="faq-card mt-2">
            <table class="faq-table">
                <thead>
                    <tr>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Berapa lama proses top up?</td>
                        <td>Proses biasanya 1-10 menit setelah pembayaran terverifikasi.</td>
                    </tr>
                    <tr>
                        <td>Metode pembayaran apa saja yang tersedia?</td>
                        <td>Kami menerima pembayaran melalui transfer bank (BCA, Mandiri, dll.) dan E-wallet (Gopay, Dana, OVO, Shopeepay).</td>
                    </tr>
                    <tr>
                        <td>Bagaimana jika pesanan saya belum masuk?</td>
                        <td>Pastikan Anda telah memasukkan ID Roblox yang benar. Jika Robux masih belum masuk setelah 24 jam, silakan hubungi admin.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <p class="mt-2">Jika ada kendala lain, silakan hubungi kami:</p>
        <div class="contact-links">
            <a href="https://instagram.com/gtramisu" target="_blank">📷 Instagram</a>
            <a href="https://wa.me/6285822161864" target="_blank">📱 WhatsApp</a>
        </div>
    </main>

    <footer>
        <p>© 2025 Robuxify</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>