<?php
include '../koneksi.php';

$aksi = $_GET['aksi'];
switch($aksi){
  
  case 'simpan':
    include '../koneksi.php';
    $id_keranjang = $_POST['id_keranjang'];
    $id_barang = $_POST['id_barang'];
    $id_user = $_POST['id_user'];
    $jumlah = $_POST['jumlah'];
    $query = mysqli_query($koneksi, "INSERT INTO keranjang
    VALUES('$id_keranjang','$id_barang','$id_user','$jumlah')");
    if ($query) {
        session_start();
        $_SESSION['simpan_transaksi'] = "sukses";
        echo '
        <script>
        window.location.href = "../user.php?page=shop";
        </script>';
    } else {
        session_start();
        $_SESSION['simpan_transaksi'] = "gagal";
        echo '
        <script>
        window.location.href = "../user.php?page=shop";
        </script>';
    };
    break;

  case 'delete':
    $id_keranjang = $_GET['id_keranjang'];
    $query = mysqli_query($koneksi,"DELETE FROM keranjang WHERE id_keranjang = '$id_keranjang'");
    header("location:../user.php?page=cart");
    break;
    }

?>