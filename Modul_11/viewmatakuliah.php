<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Mata Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="wrapper">
    <h1 class="page-title">Tabel Mata Kuliah</h1>
    <div class="card">

        <div class="top-bar">
            <a href="inputmatakuliah.php" class="btn btn-success">+ Input Data</a>
            <form class="search-form" method="get">
                <input type="search" name="cari" placeholder="Cari nama mata kuliah..."
                       value="<?= htmlspecialchars($_GET['cari'] ?? '') ?>">
                <button type="submit" class="btn btn-info">Cari</button>
                <?php if (!empty($_GET['cari'])): ?>
                    <a href="viewmatakuliah.php" class="btn btn-secondary">Reset</a>
                <?php endif; ?>
            </form>
        </div>

        <?php
        $cari = $_GET['cari'] ?? '';

        if (!empty($cari)) {
            $cariEsc = mysqli_real_escape_string($link, $cari);
            $query   = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$cariEsc%' ORDER BY kodeMK ASC";
        } else {
            $query = "SELECT * FROM t_matakuliah ORDER BY kodeMK ASC";
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
                    <th>Kode MK</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Jam</th>
                    <th>Pilihan</th>
                </tr>
                <?php
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $data['kodeMK'] . "</td>";
                    echo "<td>" . $data['namaMK'] . "</td>";
                    echo "<td>" . $data['sks']    . "</td>";
                    echo "<td>" . $data['jam']    . "</td>";
                    echo "<td class='action-links'>
                        <a href='editmatakuliah.php?kodeMK=" . $data['kodeMK'] . "' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='hapusmatakuliah.php?kodeMK=" . $data['kodeMK'] . "'
                           onclick=\"return confirm('Anda yakin akan menghapus data?')\"
                           class='btn btn-danger btn-sm'>Hapus</a>
                    </td>";
                    echo "</tr>";
                }

                if (mysqli_num_rows($result) === 0) {
                    echo "<tr><td colspan='5' class='no-data'>Tidak ada data mata kuliah.</td></tr>";
                }
                ?>
            </table>
        </div>

    </div>
</div>
</body>
</html>