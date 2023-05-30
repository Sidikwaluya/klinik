<?php
include './functions/function.php';
$nomorPasien = nomorPasien();
$conn = dbConnection();

$id = $_POST["id"];
$namaPasien = $_POST["namaPasien"];
$genderPasien = $_POST["genderPasien"];
$alamatPasien = $_POST["alamatPasien"];
$usiaPasien = $_POST["usiaPasien"];

// selesaikan query ini
$query = "UPDATE pasiens SET namaPasien='$namaPasien' WHERE id=$id";

mysqli_query($conn, $query);
header('location:./index.php');
