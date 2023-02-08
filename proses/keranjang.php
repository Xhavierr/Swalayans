<?php
    include '../koneksi.php';
    $id_keranjang = $_POST['id_keranjang'];
    $id_barang = $_POST['id_barang'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $query = mysqli_query($koneksi, "INSERT INTO keranjang
    VALUES('$id_pelanggan','$id_barang','$id_pelanggan')");
    header("location:../admin.php?page=barang");
?>