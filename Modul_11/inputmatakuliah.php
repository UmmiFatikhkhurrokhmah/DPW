<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Data Mata Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="wrapper">
    <h1 class="page-title">Input Data Mata Kuliah</h1>
    <div class="card">
        <form action="proses_inputmatakuliah.php" method="post">
            <fieldset>
                <legend>Input Data Mata Kuliah</legend>

                <div class="form-group">
                    <label for="kodeMK">Kode MK :</label>
                    <input type="number" name="kodeMK" id="kodeMK" placeholder="Masukkan kode mata kuliah" required>
                </div>

                <div class="form-group">
                    <label for="namaMK">Nama Mata Kuliah :</label>
                    <input type="text" name="namaMK" id="namaMK" placeholder="Masukkan nama mata kuliah" required>
                </div>

                <div class="form-group">
                    <label for="sks">SKS :</label>
                    <input type="number" name="sks" id="sks" placeholder="Jumlah SKS" min="1" max="6" required>
                </div>

                <div class="form-group">
                    <label for="jam">Jam :</label>
                    <input type="number" name="jam" id="jam" placeholder="Jumlah jam" min="1" required>
                </div>
            </fieldset>

            <input type="submit" name="input" value="Simpan" class="btn btn-primary">
            <a href="viewmatakuliah.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
</body>
</html>