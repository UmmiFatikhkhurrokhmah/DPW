<?php
// data kelas dengan array 2 dimensi
$array = array(
    "1A" => array("reva", "adinta", "nasyiah"),
    "1C" => array("ayu", "dhia", "khansa")
);
// menampilkan data array
print_r($array);
// menampilkan kelas 1C
print_r($array['1A']);
// menampilkan kelas 1A dengan index 0
echo $array['1A'][0];
// tampilkan reva
echo $array['1A'][1];
// tampilkan ayu
echo $array['1C'][2];

// data kelas bisa ditulis juga dengan
$array_simple = [
    "1A" => ["reva", "adinta", "nasyiah"],
    "1C" => ["ayu", "dhia", "khansa"]
];
?>