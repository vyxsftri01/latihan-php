<?php

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];

    if ($jk == 'Laki laki'){
        if($tb >= 170 || $bb <= 90){
            $n = "Selamat Anda Diterima";
        }
        else{
            $n = "Maaf Anda Tidak Diterima";
        }
    }elseif($jk == 'Perempuan'){
        if($tb >= 160 || $bb <=75){
            $n = "Selamat Anda Diterima";
        }
        else{
            $n = "Maaf Anda Tidak Diterima";
        }
    }

    $jk = $POST['jk'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <legend>Hasil</legend>
    <tr>
        <th style="text-align: left">Nama Lengkap</th>
        <th>:</th>
        <th style="text-align: left"><?php echo "$nama";?></th>
    </tr>
    <tr>
        <th style="text-align: left">Tinggi Badan</th>
        <th>:</th>
        <th style="text-align: left"><?php echo "$tb";?></th>
    </tr>
    <tr>
        <th style="text-align: left">Berat Badan</th>
        <th>:</th>
        <th style="text-align: left"><?php echo "$bb";?></th>
    </tr>
    <tr>
        <th style="text-align: left">Jenis Kelamin</th>
        <th>:</th>
        <th style="text-align: left"><?php echo "$jk";?></th>
    </tr>
    <tr>
        <th style="text-align: left">Keterangan</th>
        <th>:</th>
        <th style="text-align: left"><?php echo "$nama,$n";?></th>
    </tr>
</body>
</html>