<?php 

   $genders = ["laki-laki","perempuan"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
      .textarea{
         display: flex;
         align-items: flex-start;
      }
   </style>
   <title>create data pasien</title>
</head>
<body>
   
   <h1>form tambah data pasien</h1>

   <form action="create.php" method="POST">

      <div>
         <label for="">nama pasien</label>
         <input type="text" name="namaPasien" id="" placeholder="masukan nama pasien">
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
               <option value="<?= $gender ?> "> <?= $gender ?>   </option>
            <?php endforeach ?>
         
         </select>
      </div>

      <div class="textarea" >
         <label for="">alamat pasien</label>
         <textarea name="alamatPasien" id="" cols="30" rows="5"></textarea>
      </div>

      <button type="submit">save data</button>

   </form>

</body>
</html>