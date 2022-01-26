<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Project</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            font-family:'Times New Roman', Times, serif;
            background-color: #CCE2CB;
        }
        .container {
            border: 3px solid rgb(49, 46, 46);
            width: 500px;
            margin: 40px auto;
            background-color:  #97C1A9;
            padding: 20px;
            border-radius: 50px;
            box-shadow: 0px 20px 6px 5px rgba(0,0,0,0.9);
            
        }
        .container table tr th{
            text-align: left;
        }
        .container .tabel_1 tr th h4{
            text-align: center;
        }
        .container .tabel_1 tr th{
            padding-right: 20px;
        }
        .container .tabel_1 {
            padding-bottom: 20px;
        }
        .container .tabel_2 tr th{
            text-align: left;
            width: 200px;
            
        }
        .container .tabel_2 tr th {
            padding-bottom: 5px;
            
        }
    </style>
</head>

<body>
    <fieldset>
    <div class="container">
        <table class="tabel_1" border="0">
            
        <h1 align="center">Destinasi Wisata Yogyakarta</h1>
        <form action="" method="post">
            <table align=center cellpadding="6" border=2>
                <tr>
                    <th></th>
                    <th align="left"><u>Destinasi</U></th>
                    <th><u>Harga Tiket<u></th>
        </tr>
        <tr>
            <td>1.</td>
            <td>Bukit Bintang</td>
            <td>Rp. 10.000</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Pantai Sadranan</td>
            <td>Rp. 15.000</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Candi Borobudur</td>
            <td>Rp. 50.000</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Candi Prambanan</td>
            <td>Rp. 50.000</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Keraton Yogyakarta</td>
            <td>Rp. 5.000</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Malioboro</td>
            <td>Rp. 5.000</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Pendopo Lawas -> Cafe</td>
            <td></td>
        </tr>
        <tr>
            <td>8.</td>
            <td>Goa Pindul</td>
            <td>Rp. 100.000</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
            <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td></td>
                <td><select name="destinasi" id="">
                    <option selected>====== Pilih Destinasi ======</option>
                    <option value="1">Bukit Bintang</option>
                    <option value="2">Pantai Sadranan</option>
                    <option value="3">Candi Borobudur</option>
                    <option value="4">Candi Prambanan</option>
                    <option value="5">Keraton Yogyakarta</option>
                    <option value="6">Malioboro</option>
                    <option value="7">Pendopo Lawas -> Cafe</option>
                    <option value="8">Goa Pindul</option>
                </select></td>
                <td><input type="submit" value="Kirim" name="proses"></td>
            </tr>
        </table>
        <?php
            
    
    echo "<center>";

            if (isset($_POST['proses'])) {
                $destinasi = $_POST['destinasi'];
                if ($destinasi == '1') {
                    ?>
                  <h2 align="center">Anda memasuki wisata bukit bintang </h2>
                  <form action="" method="post">
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Bukit Bintang</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Pembayaran</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="kirim" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
                
    
          <?php
                } elseif ($destinasi == '2') { ?>
                  <h2 align="center">Pantai Sadrana</h2>
                  <form action="" method="post">
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Pantai Sadrana</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="submit" value="Kirim"></td>
                    </tr>
                  </table>
                    
          <?php } elseif ($destinasi == '3') { ?>
                  <h2 align="center">Candi Borobudur</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Candi Borobudur</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ok" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
                
          <?php } elseif ($destinasi == '4') { ?>
                  <h2 align="center">Candi Prambanan</h2>
                  <form action="" method="post">
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Candi Prambanan</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ok" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
                 
          <?php } elseif ($destinasi == '5') { ?>
                  <h2 align="center">Keraton Yogyakarta</h2>
                  <form action="" method="post">
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Keraton Yogyakarta</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ya" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
           
          <?php } elseif ($destinasi == '6') { ?>
                  <h2 align="center">Malioboro</h2>
                  <form action="" method="post"></form>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Malioboro</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 5.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ya" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
                
         <?php } elseif ($destinasi == '7') { ?>
                  <h2 align="center">Pendopo Lawas -> Cafe</h2>
                  <h3 align="center">Silahkan Pilih Menu Makanan dan Minuman</h3>
                  <form action="" method="post">
                  <table align="center" cellpadding="6" border="2">
                    <tr>
                      <th colspan="2">MENU</th>
                    </tr>
                    <tr>
                    <th><u>Makanan</u></th>
                    <th>Harga</th>
                </tr>
                <tr>
                    <td>Seblak</td>
                    <td>Rp. 10.000</td>
                </tr>
                <tr>
                    <td>Kwetiaw</td>
                    <td>Rp. 13.000</td>
                </tr>
                <tr>
                    <td>Mie Ayam</td>
                    <td>Rp. 13.000</td>
                </tr>
                <tr>
                    <th><u>Minuman</u></th>
                    <th>Harga</th>
                </tr>
                <tr>
                    <td>Jus Jambu</td>
                    <td>Rp. 9.000</td>
                </tr>
                <tr>
                    <td>Jus Mangga</td>
                    <td>Rp. 10.000</td>
                </tr>
                <tr>
                    <td>Boba milk with brown sugar</td>
                    <td>Rp. 12.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </form>
        <center>
            <form action="" method="post">
            <div class="cafe">
                <select name="pilih">
                        <option selected> Pilih Menu </option>
                        <option value="1">Seblak</option>
                        <option value="2">Kwetiaw</option>
                        <option value="3">Mie Ayam</option>
                        <option value="4">Jus Jambu</option>
                        <option value="5">Jus Mangga</option>
                        <option value="6">Boba Milk with Brown sugar</option>
                      </select>
                <input type="number" name="jumlah" placeholder="Jumlah Pesanan">
                <input type="number" name="bayar" placeholder="Uang Pembayaran">
                <input type="submit" name="cafe" value="Kirim">
        </center>
        </div>
        </form>
        <?php } elseif ($destinasi == '8') { ?>
        <h2 align="center">Goa Pindul</h2>
        <form action="" method="post">
            <table align="center">
                <tr>
                    <td>Tempat</td>
                    <td>:</td>
                    <td>Goa Pindul</td>
                </tr>
                <tr>
                    <td>Harga Tiket/Orang</td>
                    <td>:</td>
                    <td>Rp. 100.000</td>
                </tr>
                <tr>
                    <td>Jumlah Tiket</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah"></td>
                </tr>
                <tr>
                    <td>Bayar</td>
                    <td>:</td>
                    <td><input type="number" name="bayar"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="goa" value="Kirim"></td>
                </tr>
            </table>
        </form>

        <?php }
            }
            if (isset($_POST['kirim'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $nama = $_POST['nama'];
                $total = $jumlah * 10000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
        <br>
        <table align="center">
            <tr>
                 <td><h3>>Anda Memasuki Wisata Bukit Bintang</h3</td>
            </tr>
            <tr>
             <td>Pemesan atas nama</td>
             <td>:</td>
             <td>
                <?php echo $nama; ?>
            </td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td>Rp.
                    <?php echo $totalakhir; ?>
                </td>
            </tr>
            <tr>
                <td>Diskon</td>
                <td>:</td>
                <td>Rp.
                    <?php echo $diskon; ?>
                </td>
            </tr>
            <tr>
                <td>Uang Pembayaran</td>
                <td>:</td>
                <td>Rp.
                    <?php echo $bayar; ?>
                </td>
            </tr>
            <tr>
                <td>Kembalian</td>
                <td>:</td>
                <td>Rp.
                    <?php echo $kembalian; ?>
                </td>
            </tr>
        </table>
        <?php
            }
            if (isset($_POST['submit'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $nama =$_POST['nama'];
                $total = $jumlah * 15000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
            <br>
            <table align="center">
               <tr>
                 <td><h3>>Anda Memasuki Wisata Pantai Sandrana</h3</td>
               </tr>
                <tr>
                 <td>Pemesan atas nama</td>
                <td>:</td>
                <td>
                    <?php echo $nama; ?>
                </td>
              </tr>
                <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp.
                        <?php echo $totalakhir; ?>
                    </td>
                </tr>
                <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp.
                        <?php echo $diskon; ?>
                    </td>
                </tr>
                <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp.
                        <?php echo $bayar; ?>
                    </td>
                </tr>
                <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp.
                        <?php echo $kembalian; ?>
                    </td>
                </tr>
            </table>
            <?php
            }
            if (isset($_POST['ok'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $nama = $_POST['nama'];
                $total = $jumlah * 50000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
                <br>
                <table align="center">
                <tr>
                    <td><h3>>Anda Memasuki Wisata Candi Borobudur/Prambanan</h3</td>
                </tr>
                <tr>
                     <td>Pemesan atas nama</td>
                     <td>:</td>
                     <td>
                     <?php echo $nama; ?>
                    </td>
                </tr>
                    <tr>
                        <td>Total Bayar</td>
                        <td>:</td>
                        <td>Rp.
                            <?php echo $totalakhir; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Diskon</td>
                        <td>:</td>
                        <td>Rp.
                            <?php echo $diskon; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Uang Pembayaran</td>
                        <td>:</td>
                        <td>Rp.
                            <?php echo $bayar; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kembalian</td>
                        <td>:</td>
                        <td>Rp.
                            <?php echo $kembalian; ?>
                        </td>
                    </tr>
                </table>
                <?php
            }
            if (isset($_POST['ya'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $nama = $_POST['nama'];
                $total = $jumlah * 5000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
                    <br>
                    <table align="center">
                            <tr>
                                <td><h3>>Anda Memasuki Wisata Malioboro/Keraton</h3</td>
                            </tr>
                            <tr>
                                <td>Pemesan atas nama</td>
                                <td>:</td>
                                <td>
                                    <?php echo $nama; ?>
                                </td>
                            </tr>
                        <tr>
                            <td>Total Bayar</td>
                            <td>:</td>
                            <td>Rp.
                                <?php echo $totalakhir; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Diskon</td>
                            <td>:</td>
                            <td>Rp.
                                <?php echo $diskon; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Uang Pembayaran</td>
                            <td>:</td>
                            <td>Rp.
                                <?php echo $bayar; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Kembalian</td>
                            <td>:</td>
                            <td>Rp.
                                <?php echo $kembalian; ?>
                            </td>
                        </tr>
                    </table>
                    <?php
            }
            if (isset($_POST['goa'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $nama = $_POST['nama'];
                $total = $jumlah * 100000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
                        <br>
                        <table align="center">
                            <tr>
                                <td><h3>>Anda Memasuki Wisata Goa Pindul</h3</td>
                            </tr>
                            <tr>
                                <td>Pemesan atas nama</td>
                                <td>:</td>
                                <td>
                                    <?php echo $nama; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Bayar</td>
                                <td>:</td>
                                <td>Rp.
                                    <?php echo $totalakhir; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Diskon</td>
                                <td>:</td>
                                <td>Rp.
                                    <?php echo $diskon; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Uang Pembayaran</td>
                                <td>:</td>
                                <td>Rp.
                                    <?php echo $bayar; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Kembalian</td>
                                <td>:</td>
                                <td>Rp.
                                    <?php echo $kembalian; ?>
                                </td>
                            </tr>
                        </table>
                        <?php
            }
            if(isset($_POST['cafe'])){
                $pilih = $_POST['pilih'];
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                
                if($pilih == 1){
                  $total = $jumlah * 15000;
                  if($jumlah >= 7){
                    $diskon1 = "15%";
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                  }else if($jumlah >=4){
                    $diskon1 = "10%";
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                  }else if($jumlah >=2){
                    $diskon1 = "5%";
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                  }else{
                    $diskon1 = "0";
                    $totalakhir = $total;
                  }
                }else if($pilih == 2){
                  $total = $jumlah * 10000;
                  if($jumlah >= 7){
                    $diskon1 = "15%";
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                  }else if($jumlah >=4){
                    $diskon1 = "10%";
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                  }else if($jumlah >=2){
                    $diskon1 = "5%";
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                  }else{
                    $diskon1 = "0";
                    $totalakhir = $total;
                  }
                }else if($pilih == 3){
                  $total = $jumlah * 13000;
                  if($jumlah >= 7){
                    $diskon1 = "15%";
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                  }else if($jumlah >=4){
                    $diskon1 = "10%";
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                  }else if($jumlah >=2){
                    $diskon1 = "5%";
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                  }else{
                    $diskon1 = "0";
                    $totalakhir = $total;
                  }
                }else if($pilih == 4){
                  $total = $jumlah * 13000;
                  if($jumlah >= 7){
                    $diskon1 = "15%";
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                  }else if($jumlah >=4){
                    $diskon1 = "10%";
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                  }else if($jumlah >=2){
                    $diskon1 = "5%";
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                  }else{
                    $diskon1 = "0";
                    $totalakhir = $total;
                  }
                }else if($pilih == 5){
                  $total = $jumlah * 11000;
                  if($jumlah >= 7){
                    $diskon1 = "15%";
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                  }else if($jumlah >=4){
                    $diskon1 = "10%";
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                  }else if($jumlah >=2){
                    $diskon1 = "5%";
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                  }else{
                    $diskon1 = "0";
                    $totalakhir = $total;
                  }
                }else if($pilih == 6){
                  $total = $jumlah * 12000;
                  if($jumlah >= 7){
                    $diskon1 = "15%";
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                  }else if($jumlah >=4){
                    $diskon1 = "10%";
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                  }else if($jumlah >=2){
                    $diskon1 = "5%";
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                  }else{
                    $diskon1 = "0";
                    $totalakhir = $total;
                  }
                }
                $kembalian = $bayar - $totalakhir;
            ?>
                 <table align="center">
                   <tr>
                     <td>Total Bayar</td>
                     <td>:</td>
                     <td><?php echo $totalakhir;?></td>
                   </tr>
                   <tr>
                     <td>Diskon</td>
                     <td>:</td>
                     <td><?php echo $diskon1;?></td>
                   </tr>
                   <tr>
                     <td>Uang Pembayaran</td>
                     <td>:</td>
                     <td><?php echo $bayar;?></td>
                   </tr>
                   <tr>
                     <td>Kembalian</td>
                     <td>:</td>
                     <td><?php echo $kembalian;?></td>
                   </tr>
                 </table>
            <?php }
            ?>
      </form>
  </fieldset>    
  </body>
  </html>