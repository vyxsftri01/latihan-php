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
        <legend>Persyaratan TNI/Polri</legend>
        <form action="prosesTNI.php" method="post">
            <table>
                <tr>
                    <th style="text-align: left">Nama Lengkap</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" size="50"/>
                    </td>
                </tr>
                <tr>
                    <th style="text-align: left">Tinggi Badan & Berat Badan</th>
                    <td>:</td>
                    <td>
                        <input 
                        type="text"
                        name="tb"
                        min="100"
                        max="200"
                        placeholder="Tinggi Badan"
                        />
                        <input 
                        type="text"
                        name="bb"
                        min="1"
                        max="100"
                        placeholder="Bera Badan"
                        />
                    </td>
                </tr>
                <tr>
                    <th style="text-align: left">Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki"/> L
                        <input type="radio" name="jk" value="Perempuan"/> P
                    </td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="simpan">Cek</button>
                        <button type="reset">Bersihkan Formulir</button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>