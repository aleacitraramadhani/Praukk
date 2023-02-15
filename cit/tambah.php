<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN PRA UKK</title>
</head>
<body>
<h3>TAMBAH DATA APLIKASI PEMBELIAN BAHAN BANGUNAN</h3>
    <form action="proses-tambah.php" method="POST">
        <table border="1">
            <tr>
                <td><label for="nama_toko">Nama Toko :</label></td>
                <td><input type="text" name="nama_toko" /></td>
            </tr>

            <tr>
                <td><label for="alamat">Alamat :</label></td>
                <td><input type="text" name="alamat" /></td>
            </tr>

            <tr>
                <td><label for="no_siup">No Surat Izin Usaha Perusahaan :</label></td>
                <td><input type="text" name="no_siup" /></td>
            </tr>

            <tr>
                <td><label for="nama_pemilik">Nama Pemilik :</label></td>
                <td><input type="text" name="nama_pemilik" /></td>
            </tr>

            <tr>
                <td><label for="nama_bahan">Nama Bahan :</label></td>
                <td><input type="text" name="nama_bahan" /></td>
            </tr>

            <tr>
                <td><label for="satuan">Satuan :</label></td>
                <td><input type="text" name="satuan" /></td>
            </tr>

            <tr>
                <td><label for="harga">Harga :</label></td>
                <td><input type="text" name="harga" /></td>
            </tr>

</table><p>
    <td><input type="submit" name="submit" value="Tambah"></td>
</form>
</body>
</html>