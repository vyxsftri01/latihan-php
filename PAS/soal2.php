<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles.css" rel="stylesheet">
    <title>Penggajian</title>
  </head>
  <body>
      <fieldset>
  <div class="card container">
  <div class="card-body container">
  <h2 align="center">Penggajihan Karyawan</h2>
    <h1 align="center">PT. Selalu Makmur Jaya</h1>
    <form action="Proses2.php" method="post">
        <table align="center"> 
            <tr>
                <td>Nama Bendahara</td>
                <td>:</td>
                <td><input type="text" name="bendahara"></td>
            </tr>
            <tr>
                <td>Nama Pekerja</td>
                <td>:</td>
                <td><input type="text" name="pekerja"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
                    <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal Gaji</td>
                <td>:</td>
                <td><input type="date" name="tanggal"></td>
            </tr>  
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><select name="jabatan" id="">
                    <option value="">Jabatan</option>
                    <option value="Direktur">Direktur</option>
                    <option value="Manager">Manager</option>
                    <option value="Sekretaris">Sekretaris</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="OB">OB</option>
                </select></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><select name="pendidikan" id="">
                   <option value="">Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="S1">S1</option>
                    <option value="S1">S2</option>
                </select></td>
            </tr>
            <tr>
                <td>Status Pegawai</td>
                <td>:</td>
                <td><input type="radio" name="status" value="Tetap">Tetap
                    <input type="radio" name="status" value="Kontrak">Kontrak
                </td>
            </tr>
            <tr>
                <td>Lembur</td>
                <td>:</td>
                <td><input type="number" name="lembur">Hari/Rp. 20.000</td>
            </tr>
            <tr>
                <td>Potongan</td>
                <td>:</td>
                <td><input type="number" name="potongan" min="10000" max="500000"></td>
            </tr>
            <th>
                 <button type="submit" name="kirim">Kirim</button>
                 <button type="reset">Reset</button>
            </th>
        </table>
    </form>
</fieldset>
    
  </body>
  </html>