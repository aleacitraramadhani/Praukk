<?php
include("koneksi.php");
if($_GET['id_toko']){
    $id = $_GET['id_toko'];

    mysqli_query ($db, "DELETE FROM tb_bahan WHERE id_bahan='$id'");
    mysqli_query ($db, "DELETE FROM tb_toko WHERE id_toko='$id'");

    if($query){
        header('location: tampil.php?status=sukses');
} else {
    header('location: tampil.php?status=gagal');
}
}
?>