<?php

function dbConnection()
{
   $conn = mysqli_connect("localhost", "root", "", "klinik");
   return $conn;
}

function getPasiens()
{
   $conn = dbConnection();
   $query = "SELECT * FROM pasiens";
   $result = mysqli_query($conn, $query);
   return $result;
}


function nomorPasien()
{
   $conn = dbConnection();
   $query = "SELECT MAX(id) as id from pasiens";
   $result = mysqli_query($conn, $query);
   $maxId = mysqli_fetch_assoc($result);
   $string = "PSE";
   $kode = $string . sprintf("%03s", $maxId["id"] + 1);
   return $kode;
}

function getPasien($id)
{
   $conn = dbConnection();
   $query = "SELECT * FROM pasiens WHERE id=$id";
   $result = mysqli_query($conn, $query);
   return $result;
}