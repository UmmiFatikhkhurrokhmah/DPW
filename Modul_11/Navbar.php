<?php
// navbar.php - Navigasi yang diinclude di setiap halaman
// Gunakan: include 'navbar.php';
$current = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar">
    <span class="brand">&#128218; CRUD App</span>
    <a href="viewdosen.php"      class="<?= $current=='viewdosen.php'      ? 'active':'' ?>">Dosen</a>
    <a href="viewmahasiswa.php"  class="<?= $current=='viewmahasiswa.php'  ? 'active':'' ?>">Mahasiswa</a>
    <a href="viewmatakuliah.php" class="<?= $current=='viewmatakuliah.php' ? 'active':'' ?>">Mata Kuliah</a>
</nav>