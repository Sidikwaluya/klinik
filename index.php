<?php
include './functions/function.php';
$conn = dbConnection();
$result = getPasiens();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>data pasien</title>
</head>

<body>
   <h1>Data Pasien</h1>
   <a href="view_createdata.php">create data</a>
   <table border="1" cellspacing="0" cellpadding="5" >
      <thead>
         <tr>
            <th>No</th>
            <th>Nama </th>
            <th>Nomor Pasien</th>
            <th>Umur</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>option</th>
         </tr>
      </thead>
      <tbody>
         <?php $no = 1?>
         <?php while ($pasien = mysqli_fetch_assoc($result)) : ?>
            <tr>
               <td><?= $no++ ?> </td>
               <td><?= $pasien["namaPasien"] ?> </td>
               <td><?= $pasien["nomorPasien"] ?> </td>
               <td><?= $pasien["usiaPasien"] ?> tahun </td>
               <td><?= $pasien["genderPasien"] ?> </td>
               <td><?= $pasien["alamatPasien"] ?> </td>
               <td>
                  <a href="view_edit.php?id=<?= $pasien["id"] ?> ">edit</a>
                  <a href="delete.php?id=<?= $pasien['id'] ?> ">delete</a>
               </td>
            </tr>
         <?php endwhile ?>
      </tbody>
   </table>
</body>

</html>