<?php
include 'koneksi.php';

if (isset($_GET['kodeMK'])) {
    $kodeMK = $_GET['kodeMK'];
    $query  = "SELECT * FROM t_matakuliah WHERE kodeMK='$kodeMK'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    $data   = mysqli_fetch_assoc($result);
    $kodeMK = $data['kodeMK'];
    $namaMK = $data['namaMK'];
    $sks    = $data['sks'];
    $jam    = $data['jam'];
} else {
    header("location:viewmatakuliah.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mata Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="wrapper">
    <h1 class="page-title">Edit Data Mata Kuliah</h1>
    <div class="card">
        <form action="proses_editmatakuliah.php" method="post">
            <fieldset>
                <legend>Edit Data Mata Kuliah</legend>

                <div class="form-group">
                    <label>Kode MK :</label>
                    <input type="hidden" name="kodeMK" value="<?= $kodeMK ?>">
                    <input type="text" value="<?= $kodeMK ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="namaMK">Nama Mata Kuliah :</label>
                    <input type="text" name="namaMK" id="namaMK" value="<?= $namaMK ?>">
                </div>

                <div class="form-group">
                    <label for="sks">SKS :</label>
                    <input type="number" name="sks" id="sks" value="<?= $sks ?>">
                </div>

                <div class="form-group">
                    <label for="jam">Jam :</label>
                    <input type="number" name="jam" id="jam" value="<?= $jam ?>">
                </div>
            </fieldset>

            <input type="submit" name="edit" value="Update Data" class="btn btn-warning">
            <a href="viewmatakuliah.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
</body>
</html>