<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies - Identitas</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 40px auto; padding: 20px; }
        .info { background: #e8f5e9; border: 1px solid #4caf50; padding: 15px; border-radius: 6px; margin-bottom: 20px; }
        label { display: inline-block; width: 120px; margin-bottom: 10px; }
        input { margin-bottom: 10px; padding: 4px; }
        button { margin-top: 10px; padding: 6px 16px; }
    </style>
</head>
<body>
    <h2>Cookies - Simpan Identitas</h2>

<?php
// Hapus cookie jika tombol hapus ditekan
if (isset($_POST["hapus"])) {
    setcookie("nama", "", time() - 3600, "/");
    setcookie("email", "", time() - 3600, "/");
    setcookie("nim", "", time() - 3600, "/");
    echo "<p style='color:orange;'>Cookie berhasil dihapus.</p>";
}

// Simpan cookie jika form disubmit
if (isset($_POST["simpan"])) {
    $nama  = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $nim   = htmlspecialchars($_POST["nim"]);

    // Simpan cookie selama 7 hari
    setcookie("nama",  $nama,  time() + (7 * 24 * 3600), "/");
    setcookie("email", $email, time() + (7 * 24 * 3600), "/");
    setcookie("nim",   $nim,   time() + (7 * 24 * 3600), "/");

    echo "<p style='color:green;'>Identitas berhasil disimpan ke cookie!</p>";
}

// Tampilkan isi cookie jika ada
if (isset($_COOKIE["nama"])) {
    echo '<div class="info">';
    echo "<strong>Data dari Cookie:</strong><br>";
    echo "Nama  : " . $_COOKIE["nama"]  . "<br>";
    echo "Email : " . $_COOKIE["email"] . "<br>";
    echo "NIM   : " . $_COOKIE["nim"]   . "<br>";
    echo '</div>';
}
?>

    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo isset($_COOKIE['nama']) ? $_COOKIE['nama'] : ''; ?>"><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>"><br>

        <label>NIM:</label>
        <input type="text" name="nim" value="<?php echo isset($_COOKIE['nim']) ? $_COOKIE['nim'] : ''; ?>"><br>

        <button type="submit" name="simpan">Simpan Cookie</button>
        <button type="submit" name="hapus" style="background:#e57373;color:white;border:none;padding:6px 16px;cursor:pointer;">Hapus Cookie</button>
    </form>
</body>
</html>