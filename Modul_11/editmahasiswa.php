<?php
include 'koneksi.php';

if (isset($_GET['npm'])) {
    $npm    = $_GET['npm'];
    $query  = "SELECT * FROM t_mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    $data    = mysqli_fetch_assoc($result);
    $npm     = $data['npm'];
    $namaMhs = $data['namaMhs'];
    $prodi   = $data['prodi'];
    $alamat  = $data['alamat'];
    $noHP    = $data['noHP'];
} else {
    header("location:viewmahasiswa.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="wrapper">
    <h1 class="page-title">Edit Data Mahasiswa</h1>
    <div class="card">
        <form action="proses_editmahasiswa.php" method="post">
            <fieldset>
                <legend>Edit Data Mahasiswa</legend>

                <div class="form-group">
                    <label>NPM :</label>
                    <input type="hidden" name="npm" value="<?= $npm ?>">
                    <input type="text" value="<?= $npm ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="namaMhs">Nama Mahasiswa :</label>
                    <input type="text" name="namaMhs" id="namaMhs" value="<?= $namaMhs ?>">
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi :</label>
                    <input type="text" name="prodi" id="prodi" value="<?= $prodi ?>">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" id="alamat" value="<?= $alamat ?>">
                </div>

                <div class="form-group">
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP" value="<?= $noHP ?>">
                </div>
            </fieldset>

            <input type="submit" name="edit" value="Update Data" class="btn btn-warning">
            <a href="viewmahasiswa.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
</body>
</html>