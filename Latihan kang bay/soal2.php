<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <table>
            <form action="" method="post">
                <td><select name="soal" id="">
                    <option selected>====== Pilih Soal ======</option>
                    <option value="1">Input pertama</option>
                    <option value="2">Input kedua</option>
                    <option value="3">Input ketiga</option>
                </select></td>
                <tr>
                    <td>Masukan bilangan</td>
                    <td>:</td>
                    <td><input type="number" name="nama"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="kirim" value="Kirim">
                    </td>
                </tr>
        </form>
        </table>
          <?php

           if(isset($_POST['kirim'])){
               $soal = $_POST['soal'];
               $nama = $_POST['nama'];
               if($soal == '1'){
                   ?>
                <center><h2>Ini input pertama segitiga siku siku angka</h2></center>
                     <?php
                   
                   for ($i=1; $i <=$nama ; $i++) {
           
                    for ($k=1; $k <=$i ; $k++) {
                     echo "$k &nbsp";
                     }
                     echo "<br>";
                    }
                }elseif ($soal == '2'){
                    ?>
                    <center><h2>Ini input kedua priramid angka</h2></center>
                    <?php
                    $c=$nama;
                    for ($i=1; $i<=$nama; $i++){
                       echo "<center>";
                       for ($d=1; $d<=$c; $d++) {
                       echo "$d &nbsp";

                       }
                       $c--;
                       echo "<br />";
                       }
                }elseif ($soal == '3'){
                    ?>
                    <center><h2>Ini Input ke tiga </h2></center>
                    <?php
                     for ($i=1;$i<=$nama;$i++){
                        for ($j=$i;$j<=$nama;$j++){
                       
                       echo "$j &nbsp";
                         }
                        echo "<br>";
                   }
                }

                }
                    
           
                  ?>
         <?php
           ?>
    </fieldset>
</body>
</html>