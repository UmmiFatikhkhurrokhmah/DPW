<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="wrapper">
    <h1 class="page-title">Input Data Mahasiswa</h1>
    <div class="card">
        <form action="proses_inputmahasiswa.php" method="post">
            <fieldset>
                <legend>Input Data Mahasiswa</legend>

                <div class="form-group">
                    <label for="npm">NPM :</label>
                    <input type="number" name="npm" id="npm" placeholder="Masukkan NPM" required>
                </div>

                <div class="form-group">
                    <label for="namaMhs">Nama Mahasiswa :</label>
                    <input type="text" name="namaMhs" id="namaMhs" placeholder="Masukkan nama mahasiswa" required>
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi :</label>
                    <input type="text" name="prodi" id="prodi" placeholder="Contoh: Teknik Informatika" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat lengkap" required>
                </div>

                <div class="form-group">
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP" placeholder="Contoh: 081222333444" required>
                </div>
            </fieldset>

            <input type="submit" name="input" value="Simpan" class="btn btn-primary">
            <a href="viewmahasiswa.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
</body>
</html>