<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN PRA UKK</title>
</head>
<body>
    <h1>DATA APLIKASI PEMBELIAN BAHAN BANGUNAN</h1>
    <h4><a href=tambah.php>TAMBAH</a></h4>
    <table border="1">
        <tr>
            <td>Nama Toko</td>
            <td>Alamat</td>
            <td>No Surat Izin Usaha Perusahaan</td>
            <td>Nama Pemilik</td>
            <td>Nama Bahan</td>
            <td>Satuan</td>
            <td>Harga</td>
            <td>Aksi</td>
        </tr>

        <?php
        include("koneksi.php");
        $sql="SELECT * FROM tb_toko INNER JOIN tb_bahan ON tb_toko.id_bahan= tb_bahan.id_bahan";
        $query= mysqli_query($db, $sql);

        while($row=mysqli_fetch_array($query)){
            echo"<tr>";
            echo"<td>".$row['nama_toko']."</td>";
            echo"<td>".$row['alamat']."</td>";
            echo"<td>".$row['no_siup']."</td>";
            echo"<td>".$row['nama_pemilik']."</td>";
            echo"<td>".$row['nama_bahan']."</td>";
            echo"<td>".$row['satuan']."</td>";
            echo"<td>".$row['harga']."</td>";
            echo"<td>";
            echo"<a href='edit.php?id_toko=".$row['id_toko']."'>EDIT</a>|";
            echo"<a href='hapus.php?id_toko=".$row['id_toko']."'>HAPUS</a>|";
            echo"</td>";
            echo"</tr>";
        }
        ?>
        </table>

</body>
</html>