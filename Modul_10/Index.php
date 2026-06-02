<?php
require_once('kelas/Manusia.php');

// Objek teman
$miyci = new Manusia();
$miyci->setNama("Miyci");
$miyci->setUmur(19);

// Tampilkan teman
echo "Nama Teman : " . $miyci->getNama() . "<br>";
echo "Umur Teman : " . $miyci->getUmur() . " tahun";
echo "<br><hr>";

// Identitas saya sendiri
$saya = new Manusia();
$saya->setNama("Ummi Fatikhkhurrokhmah");
$saya->setUmur(19);

echo "Nama Saya  : " . $saya->getNama() . "<br>";
echo "Umur Saya  : " . $saya->getUmur() . " tahun<br>";
echo "NIK Saya   : " . $saya->tampilkanNIK() . "<br>";

echo "<hr>";

echo "<i>Kesimpulan: Class mendefinisikan properti dan method. Access modifier
(public, protected, private) mengontrol hak akses. Getter/Setter digunakan
untuk mengakses properti yang tidak bisa diakses langsung dari luar kelas.</i>";