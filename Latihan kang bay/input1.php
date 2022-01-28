<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <form action="" method="post">
       <label for="1">Masukkan Input : </label>
       <input type="number" id="1" name="nama">
       <button type="submit" name="kirim">Kirim</button>
       </form>
       <?php
       if (isset($_POST['kirim'])) {
         $nama = $_POST['nama'];
        
         for ($i=1; $i <=$nama ; $i++) {
           
           for ($k=1; $k <=$i ; $k++) {
            echo "$k &nbsp";
            }
            echo "<br>";
           }
           
       }
       ?>
</body>
</html>