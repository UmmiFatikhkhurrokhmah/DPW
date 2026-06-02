<?php
$namaBuah = array("Nanas", "Mangga", "jeruk", "Apel", "Melon", "Manggis");
echo "saya suka " . $namaBuah[0] . ", " . " dan " . $namaBuah[1] . " dan " . $namaBuah[2] . ".";

// tampikan Mangga
echo "saya suka " . $namaBuah[1];
// tampikan Jeruk
echo "saya suka " . $namaBuah[2];
// tampikan Apel
echo "saya suka " . $namaBuah[3];
// tampikan Melon
echo "saya suka " . $namaBuah[4];

// array dengan spesifik index
$umur = array("mici" => "18 Tahun", "reva" => "19 Tahun", "dindaa" => "18 Tahun");
$umur['mendy'] = "19 Tahun";
echo "Umur mici adalah " . $umur['mici'];
// tampikan semua umur
foreach ($umur as $nama => $nilai) {
    echo $nama . " : " . $nilai . "<br>";
}
?>