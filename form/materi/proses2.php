<?php
//penampung data
if(isset($_POST['simpan'])){
    //textfield
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    //radio
    $jk = $_POST['jk'];

    //select
    $agama = $_POST['agama'];

    //number
    $nomor = $_POST['nomor'];
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];

    //checkbox
    if (isset($_POST['sehat'])){
        $sehat = "ada";
    }else{
        $sehat = "Tidak Ada";
    }
    if(isset($_POST['kk'])){
        $kk = "ada";
    }else{
        $kk= "Tiddak Ada";
    }
    if(isset($_POST['skl'])){
        $skl = "ada";
    }else{
        $skl = "Tidak Ada";
    }
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
    <center><h1>Pendaftaran Peserta Didik Baru</h1></center>
    Nama Lengkap : <b><?php echo $nama; ?></b><br>
    Email : <b><?php echo $email; ?></b><br>
    Jenis Kelamin : <b><?php echo $jk; ?></b><br>
    Agama : <b><?php echo $agama; ?></b><br>
    Tinggi Badan : <b><?php echo $tb; ?></b><br>
    Berat Badan : <b><?php echo $bb; ?></b><br>
    Kelengkapan Persyaratan :
    <li>Surat Sehat : <b><?php echo $sehat; ?></b></li><br>
    <li>Kartu Keluarga : <b><?php echo $kk; ?></b></li><br>
    <li>Surat  Keterangan Lulus : <b><?php echo $skl; ?></b></li><br>
    Nomor Telepon :  <b><?php echo $nomor; ?></b><br>
</body>
</html>

<?php?>