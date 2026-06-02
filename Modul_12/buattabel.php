<?php
$con = new mysqli( hostname: "localhost", username: "root", password: "", database: "db_praktikum");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$q="CREATE TABLE t_login (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

$hasil=$con->query($q);
if ($hasil === TRUE) {
  echo "Tabel t_login berhasi dibuat";
} else {
    echo "Tabel gagal dibuat: " . $con->error;
}
$con->close();
?>