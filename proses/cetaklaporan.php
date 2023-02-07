<?php
include '../koneksi.php';

$aksi = $_GET['aksi'];
$id_transaksi = $_GET['id_transaksi'];
switch($aksi){
  
  case 'show':
    $query = mysqli_query($koneksi,"SELECT * FROM v_transaksi ");
    header("location:../page/cetak_laporan.php?id_transaksi= $id_transaksi" );
    break;
    }

?>