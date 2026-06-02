<?php
$con = new mysqli( hostname: "localhost", username: "root", password: "", database: "db_praktikum");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$input=$con->escape_string($_GET['id']);
$statement= $con->prepare( query: "Select * from t_dosen where idDosen=?");
$statement->bind_param( types: "i", var1: $input);
$statement->execute();
$hasil=$statement->get_result();
while($baris = $hasil->fetch_assoc()){
    echo(htmlspecialchars($baris['namaDosen']))."<br>";
}
$con->close();
?>