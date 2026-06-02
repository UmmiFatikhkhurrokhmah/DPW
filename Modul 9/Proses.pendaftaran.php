<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .info { background: #e8f4f8; padding: 15px; border-radius: 8px; max-width: 400px; }
        h2 { color: #333; }
        a { color: #0066cc; }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim    = isset($_POST["nim"])      ? htmlspecialchars($_POST["nim"])      : "";
        $nama   = isset($_POST["nama"])     ? htmlspecialchars($_POST["nama"])     : "";
        $email  = isset($_POST["email"])    ? htmlspecialchars($_POST["email"])    : "";
        $tempat = isset($_POST["tempat"])   ? htmlspecialchars($_POST["tempat"])   : "";
        $tgl    = isset($_POST["tgl_lahir"])? htmlspecialchars($_POST["tgl_lahir"]): "";
        $alamat = isset($_POST["alamat"])   ? htmlspecialchars($_POST["alamat"])   : "";
        $gender = isset($_POST["gender"])   ? htmlspecialchars($_POST["gender"])   : "";
        ?>
        <div class="info">
            <h2>Selamat datang <b><?php echo $nama; ?></b>!</h2>
            NIM : <?php echo $nim; ?><br>
            Email : <?php echo $email; ?><br>
            Tempat, Tanggal Lahir : <?php echo $tempat; ?> , <?php echo $tgl; ?><br>
            Alamat : <?php echo $alamat; ?><br>
            Jenis Kelamin : <?php echo $gender; ?><br>
        </div>
        <?php
    } else {
        echo "<p>Tidak ada data yang dikirim. <a href='form_pendaftaran.html'>Kembali ke form</a></p>";
    }
    ?>
    <br><a href="form_pendaftaran.html">← Kembali ke Form</a>
</body>
</html>