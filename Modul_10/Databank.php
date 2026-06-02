<?php
require_once('kelas/akunBank.php');

echo "<h3>=== Data Akun Bank ===</h3>";

// Buat 2 akun bank
$data1 = new akunBank(nomorAkun: "001", nominal: 10000);
$data1->setNama("Miyci");

$data2 = new akunBank(nomorAkun: "002", nominal: 10000);
$data2->setNama("Ummi");

// Tampilkan data akun 1
echo "<b>Akun: " . $data1->getAccountNumber() . " - " . $data1->getNama() . "</b><br>";
$data1->tampilkanSaldo();
$data1->tambahUang(5000);
$data1->tampilkanSaldo();
$data1->kurangUang(3000);
$data1->tampilkanSaldo();
$data1->hitungPajak();

echo "<hr>";

// Tampilkan data akun 2
echo "<b>Akun: " . $data2->getAccountNumber() . " - " . $data2->getNama() . "</b><br>";
$data2->tampilkanSaldo();
$data2->tambahUang(20000);
$data2->tampilkanSaldo();
$data2->kurangUang(8000);
$data2->tampilkanSaldo();
$data2->hitungPajak();