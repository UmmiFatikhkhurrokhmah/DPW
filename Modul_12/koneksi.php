<?php
$con = new mysqli( hostname: "localhost", username: "root", password: "", database: "db_praktikum");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>