<?php
require_once 'Mahasiswa.php';

$mhs = new Mahasiswa();
$pesan = "";

if (isset($_POST['tambah'])) {
    $npm    = $_POST['npm'];
    $nama   = $_POST['namaMhs'];
    $prodi  = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP   = $_POST['noHP'];
    $mhs->tambah($npm, $nama, $prodi, $alamat, $noHP);
    $pesan = "Data mahasiswa berhasil ditambahkan!";
}

if (isset($_POST['ubah'])) {
    $npm    = $_POST['npm'];
    $nama   = $_POST['namaMhs'];
    $prodi  = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP   = $_POST['noHP'];
    $mhs->ubah($npm, $nama, $prodi, $alamat, $noHP);
    $pesan = "Data mahasiswa berhasil diubah!";
}

if (isset($_GET['hapus'])) {
    $npm = $_GET['hapus'];
    $mhs->hapus($npm);
    $pesan = "Data mahasiswa berhasil dihapus!";
}

$dataEdit = null;
if (isset($_GET['edit'])) {
    $npm    = $_GET['edit'];
    $hasil  = $mhs->tampilSatu($npm);
    $dataEdit = $hasil->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Mahasiswa - OOP Prepared Statement</title>
<style>
    body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
    h2 { color: #333; }
    table { border-collapse: collapse; width: 100%; background: white; }
    th { background: #4CAF50; color: white; padding: 10px; }
    td { border: 1px solid #ddd; padding: 8px; }
    tr:nth-child(even) { background: #f2f2f2; }
    form { background: white; padding: 20px; margin-bottom: 20px; border: 1px solid #ddd; }
    input[type=text], input[type=number] { width: 100%; padding: 8px; margin: 5px 0 10px; box-sizing: border-box; border: 1px solid #ccc; }
    input[type=submit] { background: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer; }
    input[type=submit]:hover { background: #45a049; }
    .hapus { color: red; }
    .edit { color: blue; }
    .pesan { background: #dff0d8; padding: 10px; margin-bottom: 10px; color: #3c763d; border: 1px solid #d6e9c6; }
</style>
</head>
<body>

<h2>Teknologi Informasi Mahasiswa</h2>
<p>Praktikum 12 - OOP + Prepared Statement</p>

<?php if ($pesan != ""): ?>
    <div class="pesan"><?= htmlspecialchars($pesan) ?></div>
<?php endif; ?>

<form method="POST" action="index.php">
    <h3><?= $dataEdit ? "Edit Data Mahasiswa" : "Tambah Data Mahasiswa" ?></h3>

    <label>NPM</label>
    <input type="number" name="npm"
        value="<?= $dataEdit ? htmlspecialchars($dataEdit['npm']) : '' ?>"
        <?= $dataEdit ? 'readonly' : '' ?> required>

    <label>Nama Mahasiswa</label>
    <input type="text" name="namaMhs"
        value="<?= $dataEdit ? htmlspecialchars($dataEdit['namaMhs']) : '' ?>" required>

    <label>Program Studi</label>
    <input type="text" name="prodi"
        value="<?= $dataEdit ? htmlspecialchars($dataEdit['prodi']) : '' ?>">

    <label>Alamat</label>
    <input type="text" name="alamat"
        value="<?= $dataEdit ? htmlspecialchars($dataEdit['alamat']) : '' ?>">

    <label>No HP</label>
    <input type="text" name="noHP"
        value="<?= $dataEdit ? htmlspecialchars($dataEdit['noHP']) : '' ?>">

    <?php if ($dataEdit): ?>
        <input type="submit" name="ubah" value="Simpan Perubahan">
        <a href="index.php">Batal</a>
    <?php else: ?>
        <input type="submit" name="tambah" value="Tambah">
    <?php endif; ?>
</form>

<h3>Daftar Mahasiswa</h3>
<table>
    <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Aksi</th>
    </tr>
    <?php
    $semua = $mhs->tampilSemua();
    while ($baris = $semua->fetch_assoc()):
    ?>
    <tr>
        <td><?= htmlspecialchars($baris['npm']) ?></td>
        <td><?= htmlspecialchars($baris['namaMhs']) ?></td>
        <td><?= htmlspecialchars($baris['prodi']) ?></td>
        <td><?= htmlspecialchars($baris['alamat']) ?></td>
        <td><?= htmlspecialchars($baris['noHP']) ?></td>
        <td>
            <a class="edit" href="index.php?edit=<?= $baris['npm'] ?>">Edit</a> |
            <a class="hapus" href="index.php?hapus=<?= $baris['npm'] ?>"
               onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>