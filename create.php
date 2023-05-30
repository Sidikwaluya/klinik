<?php 
include './functions/function.php';
$nomorPasien = nomorPasien();
$conn = dbConnection();

$namaPasien = $_POST["namaPasien"];
$genderPasien = $_POST["genderPasien"];
$alamatPasien = $_POST["alamatPasien"];
$usiaPasien = $_POST["usiaPasien"];

$query = "INSERT INTO pasiens (namaPasien, usiaPasien, genderPasien, alamatPasien, nomorPasien) VALUES ('$namaPasien','$usiaPasien' ,'$genderPasien', '$alamatPasien','$nomorPasien') ";

mysqli_query($conn, $query);
header('location:./index.php');