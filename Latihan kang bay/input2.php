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
        $c=$nama;
         for ($i=1; $i<=$nama; $i++){
            echo "<center>";
            for ($d=1; $d<=$c; $d++) {
            echo "$d %nbsp";
            }
            $c--;
            echo "<br />";
            }
           
       }
       ?>
</body>
</html>