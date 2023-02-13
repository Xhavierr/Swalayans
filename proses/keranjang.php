<?php
    include '../koneksi.php';
    $id_keranjang = $_POST['id_keranjang'];
    $id_barang = $_POST['id_barang'];
    $id_user = $_POST['id_user'];
    $jumlah = $_POST['jumlah'];
    $query = mysqli_query($koneksi, "INSERT INTO keranjang
    VALUES('$id_keranjang','$id_barang','$id_user','$jumlah')");
    header("location:../user.php?page=detail_shop&id_barang=$id_barang");
?>