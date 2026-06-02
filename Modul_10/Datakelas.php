<?php
require_once('kelas/Mahasiswa.php');

echo "<h3>=== Data Kelas Mahasiswa ===</h3>";

$mhs1 = new mahasiswa(nama: "Ummi Fatikhkhurrokhmah");
$mhs1->setNIM("253307005");
$mhs1->setKelas("2A");
$mhs1->setJurusan("Teknologi Informasi");
$mhs1->setUmur(19);

// Tampilkan nama, nim, dan kelas dari $mhs1
echo "Nama    : " . $mhs1->getNama() . "<br>";
echo "NIM     : " . $mhs1->getNim() . "<br>";
echo "Kelas   : " . $mhs1->getKelas() . "<br>";
echo "Jurusan : " . $mhs1->getJurusan() . "<br>";
echo "Umur    : " . $mhs1->getUmur() . " tahun<br>";

echo "<hr>";

// Tambah mahasiswa lain
$mhs2 = new mahasiswa(nama: "Reva Adinta Nasyiah");
$mhs2->setNIM("205307010");
$mhs2->setKelas("1A");
$mhs2->setJurusan("Teknologi Informasi");
$mhs2->setUmur(20);

echo "Nama    : " . $mhs2->getNama() . "<br>";
echo "NIM     : " . $mhs2->getNim() . "<br>";
echo "Kelas   : " . $mhs2->getKelas() . "<br>";
echo "Jurusan : " . $mhs2->getJurusan() . "<br>";
echo "Umur    : " . $mhs2->getUmur() . " tahun<br>";