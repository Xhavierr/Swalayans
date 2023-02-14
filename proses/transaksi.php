<?php
include '../koneksi.php';

$aksi = $_GET['aksi'];
switch($aksi){
  
  case 'simpan':
    $id_transaksi = $_POST['id_transaksi'];
    $id_user = $_POST['id_user'];
    $tanggal = $_POST['tanggal'];
    $total = $_POST['total'];
    $query = mysqli_query($koneksi, "INSERT INTO transaksi VALUES('$id_transaksi','$id_user','$tanggal','$total')");
    header("location:../user.php?page=home");
    break;

  case 'delete':
    $id_pelanggan = $_GET['id_pelanggan'];
    $query = mysqli_query($koneksi,"DELETE FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'");
    header("location:../admin.php?page=pelanggan");
    break;
    }

?>