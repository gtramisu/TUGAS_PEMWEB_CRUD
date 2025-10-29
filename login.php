<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === 'admin' && $password === '123') {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "❌ Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Robuxify</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="rocket.png">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background: #f5f7fa;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-card img {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .form-group input {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        .btn-primary {
            background: #fcd34d;
            border: none;
            border-radius: 50px;
            padding: 12px 0;
            font-weight: 600;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #e6c243;
        }

        .error {
            color: red;
            font-weight: 600;
            margin-bottom: 10px;
        }

        footer {
            width: 100vw;           /* full width */
            background: #1a1a1a;    /* warna gelap */
            color: #e0e0e0;
            text-align: center;
            padding: 15px 0;
            box-sizing: border-box;
            margin-top: auto;
            position: relative;
            left: 0;
        }
    </style>
</head>
<body>
    <main>
        <section class="form-card">
            <img src="rocket.png" alt="Logo Robuxify">
            <h2>🔑 Login ke Robuxify</h2>

            <?php if ($error): ?>
                <p class="error"><?= $error; ?></p>
            <?php endif; ?>

            <form method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" required placeholder="Masukkan username">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required placeholder="Masukkan password">
                </div>

                <button type="submit" class="btn-primary">Login</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2025 Robuxify</p>
    </footer>
</body>
</html>
