<?php
if(isset($_POST ['kirim'])){
    $bendahara = $_POST ['bendahara'];
    $pekerja = $_POST ['pekerja'];
    $jenis = $_POST ['jk'];
    $status = $_POST ['status'];
    $tanggal = $_POST ['tanggal'];
    $jabatan = $_POST ['jabatan'];
    $pendidikan = $_POST ['pendidikan'];
    $lembur = $_POST ['lembur'];
    $potongan = $_POST ['potongan'];

    if ($jabatan == "Direktur"){
        $gaji = 10000000;
    }elseif($jabatan == "Manager"){
        $gaji = 7500000;
    }elseif($jabatan == "Sekretaris"){
        $gaji = 5000000;
    }elseif($jabatan == "Karyawan"){
        $gaji = 3000000;
    }elseif($jabatan == "OB"){
        $gaji = 1500000;
    }

    if ($pendidikan == "SD"){
        $tunjangan = 200000;
    }elseif ($pendidikan == "SMP"){
        $tunjangan = 500000;
    }elseif ($pendidikan == "SMA"){
        $tunjangan = 1000000;
    }elseif ($pendidikan == "S1"){
        $tunjangan = 1500000;
    }elseif ($pendidikan == "S2"){
        $tunjangan = 2000000;
    }

    if ($status == "Tetap"){
        $bonus = 500000;
    }elseif($status = "Kontrak"){
        $bonus = 0;
    }

    $vakasi = $lembur * 20000;
    $total = ($gaji + $tunjangan + $vakasi + $bonus) - $potongan;
    echo "<center>";
    echo "<br>";
    echo "<h2>Struk Gaji Karyawan</h2>";
    echo "<hr>";
    echo "<table>";
    echo "<tr>";
    echo "<td></td><td></td>
          <td>
          <p align=right>Tanggal : $tanggal</p>
          </td> ";
    echo "</tr>";
    echo "<tr>";
    echo "<td>
          <h4>Gaji Pokok</h4>
          </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama Karyawan </td>
          <td>:</td>
          <td>$pekerja</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Status Kerja </td>
          <td>:</td>
          <td>$status</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin </td>
          <td>:</td>
          <td>$jenis</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pendidikan Terakhir </td>
          <td>:</td>
          <td>$pendidikan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jabatan </td>
          <td>:</td>
          <td>$jabatan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Gaji </td>
          <td>:</td>
          <td>Rp. $gaji</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>
          <h4>Tunjangan</h4>
          </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tunjangan Pendidikan </td>
          <td>:</td>
          <td>Rp. $tunjangan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Vakasi Lembur </td>
          <td>:</td>
          <td>Rp. $vakasi</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Bonus Status Kerja </td>
          <td>:</td>
          <td>Rp. $bonus</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>
          <h4>Potongan</h4>
          </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Potongan </td>
          <td>:</td>
          <td>Rp. $potongan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>
          <h4>Total Gaji      : Rp.$total</h4>
          </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td></td>
          <td></td>
          <td>
          <p align=right>Bendahara : $bendahara</p>
          </td> ";
    echo "</tr>";
    echo "</table>";
    echo "</center>";
} 