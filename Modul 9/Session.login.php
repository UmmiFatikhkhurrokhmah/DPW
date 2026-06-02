<?php
session_start();

// Fungsi filter input
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Proses logout
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: session_login.php");
    exit;
}

$error = "";

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $username = bersihkan_input($_POST["username"]);
        $password = bersihkan_input($_POST["password"]);

        if (empty($username) || empty($password)) {
            throw new Exception("Username dan password tidak boleh kosong!");
        }

        // Data user (simulasi - normalnya dari database)
        $users = [
            "admin"    => "admin123",
            "mahasiswa" => "mhs2024",
        ];

        if (!array_key_exists($username, $users)) {
            throw new Exception("Username tidak ditemukan!");
        }

        if ($users[$username] !== $password) {
            throw new Exception("Password salah!");
        }

        // Login berhasil - simpan ke session
        $_SESSION["username"] = $username;
        $_SESSION["login_time"] = date("Y-m-d H:i:s");

        header("Location: session_login.php");
        exit;

    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login dengan Session</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 450px; margin: 60px auto; padding: 20px; }
        .error { color: red; font-size: 0.85em; background: #fdecea; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
        .success { color: green; background: #e8f5e9; padding: 15px; border-radius: 6px; margin-bottom: 15px; }
        label { display: block; margin-bottom: 4px; font-weight: bold; }
        input[type=text], input[type=password] { width: 100%; padding: 8px; margin-bottom: 12px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { padding: 8px 20px; background: #1565C0; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0d47a1; }
        .logout-btn { background: #e53935; }
        .logout-btn:hover { background: #b71c1c; }
        .hint { font-size: 0.8em; color: #666; margin-top: 15px; background: #f5f5f5; padding: 10px; border-radius: 4px; }
    </style>
</head>
<body>
    <h2>Login dengan Session</h2>

    <?php if (isset($_SESSION["username"])): ?>
        <!-- Halaman setelah login -->
        <div class="success">
            <strong>Login berhasil!</strong><br>
            Selamat datang, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b><br>
            Waktu login: <?php echo $_SESSION["login_time"]; ?>
        </div>
        <p>Anda sudah login. Session aktif selama browser dibuka.</p>
        <a href="session_login.php?logout=1">
            <button class="logout-btn">Logout</button>
        </a>

    <?php else: ?>
        <!-- Form login -->
        <?php if (!empty($error)): ?>
            <div class="error">⚠️ <?php echo $error; ?></div>
        <?php endif; ?>

        <form method="post">
            <label>Username:</label>
            <input type="text" name="username" placeholder="masukkan username">

            <label>Password:</label>
            <input type="password" name="password" placeholder="masukkan password">

            <button type="submit">Login</button>
        </form>

        <div class="hint">
            <strong>Akun tersedia untuk demo:</strong><br>
            Username: <code>admin</code> | Password: <code>admin123</code><br>
            Username: <code>mahasiswa</code> | Password: <code>mhs2024</code>
        </div>
    <?php endif; ?>
</body>
</html>