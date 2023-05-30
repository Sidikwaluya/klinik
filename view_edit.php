<?php
include './functions/function.php';
$genders = ["laki-laki", "perempuan"];
$id = $_GET["id"];
$result = getPasien($id);
$pasien = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
      .textarea {
         display: flex;
         align-items: flex-start;
      }
   </style>
   <title>create data pasien</title>
</head>

<body>

   <h1>form tambah data pasien</h1>

   <form action="create.php" method="POST">
      <!-- sengaja dibuat input tipe hidden dengan nama id sebagai parameter query WHERE di update.php -->
      <input type="hidden" name="id" value="<?= $pasien["id"] ?> ">
      <div>
         <label for="">nama pasien</label>
         <input type="text" name="namaPasien" value="<?= $pasien["namaPasien"] ?> " id="" placeholder="masukan nama pasien">
      </div>

      <div>
         <label for="">usia pasien</label>
         <input type="text" name="usiaPasien" id="" placeholder="masukan usia pasien">
      </div>

      <div>
         <label for="">gender</label>
         <select name="genderPasien" id="">
            <option value="">pilih gender</option>

            <?php foreach ($genders as $gender) : ?>
               <option value="<?= $gender ?> "> <?= $gender ?> </option>
            <?php endforeach ?>

         </select>
      </div>

      <div class="textarea">
         <label for="">alamat pasien</label>
         <textarea name="alamatPasien" id="" cols="30" rows="5"></textarea>
      </div>

      <button type="submit">update data</button>

   </form>

</body>

</html>