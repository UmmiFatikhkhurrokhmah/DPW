<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="wrapper">
    <h1 class="page-title">Tabel Mahasiswa</h1>
    <div class="card">

        <div class="top-bar">
            <a href="inputmahasiswa.php" class="btn btn-success">+ Input Data</a>
            <form class="search-form" method="get">
                <input type="search" name="cari" placeholder="Cari nama mahasiswa..."
                       value="<?= htmlspecialchars($_GET['cari'] ?? '') ?>">
                <button type="submit" class="btn btn-info">Cari</button>
                <?php if (!empty($_GET['cari'])): ?>
                    <a href="viewmahasiswa.php" class="btn btn-secondary">Reset</a>
                <?php endif; ?>
            </form>
        </div>

        <?php
        $cari = $_GET['cari'] ?? '';

        if (!empty($cari)) {
            $cariEsc = mysqli_real_escape_string($link, $cari);
            $query   = "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE '%$cariEsc%' ORDER BY npm ASC";
        } else {
            $query = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
        }

        $result = mysqli_query($link, $query);

        if (!$result) {
            die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
        }

        if (!empty($cari)) {
            $jml = mysqli_num_rows($result);
            echo "<div class='alert alert-info'>Hasil pencarian \"<b>" . htmlspecialchars($cari) . "</b>\" : $jml data ditemukan.</div>";
        }
        ?>

        <div class="tbl-wrapper">
            <table class="data-table" border="1">
                <tr>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Prodi</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Pilihan</th>
                </tr>
                <?php
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $data['npm']     . "</td>";
                    echo "<td>" . $data['namaMhs'] . "</td>";
                    echo "<td>" . $data['prodi']   . "</td>";
                    echo "<td>" . $data['alamat']  . "</td>";
                    echo "<td>" . $data['noHP']    . "</td>";
                    echo "<td class='action-links'>
                        <a href='editmahasiswa.php?npm=" . $data['npm'] . "' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='hapusmahasiswa.php?npm=" . $data['npm'] . "'
                           onclick=\"return confirm('Anda yakin akan menghapus data?')\"
                           class='btn btn-danger btn-sm'>Hapus</a>
                    </td>";
                    echo "</tr>";
                }

                if (mysqli_num_rows($result) === 0) {
                    echo "<tr><td colspan='6' class='no-data'>Tidak ada data mahasiswa.</td></tr>";
                }
                ?>
            </table>
        </div>

    </div>
</div>
</body>
</html>