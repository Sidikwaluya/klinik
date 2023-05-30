<?php
include './functions/function.php';

$id = $_GET["id"];
$conn = dbConnection();
$query = "DELETE FROM pasiens WHERE id=$id";

mysqli_query($conn, $query);
header('location:./index.php');