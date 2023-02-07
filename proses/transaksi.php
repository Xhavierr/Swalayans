<?php
include '../koneksi.php';

$aksi = $_GET['aksi'];
switch($aksi){
  
  case 'simpan':
    $id_transaksi = $_POST['id_transaksi'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $tanggal = $_POST['tanggal'];
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['total'];
    $id_user = $_POST['id_user'];
    $query = mysqli_query($koneksi, "INSERT INTO transaksi VALUES('$id_transaksi','$id_pelanggan','$tanggal','$id_barang','$jumlah','$total','$id_user')");
    header("location:../admin.php?page=transaksi");
    break;

  case 'update':
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $query = mysqli_query($koneksi,"UPDATE pelanggan SET nama_pelanggan = '$nama_pelanggan', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_hp = '$no_hp' WHERE id_pelanggan = '$id_pelanggan'");
    header("location:../admin.php?page=pelanggan");
    break;
  case 'delete':
    $id_pelanggan = $_GET['id_pelanggan'];
    $query = mysqli_query($koneksi,"DELETE FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'");
    header("location:../admin.php?page=pelanggan");
    break;
    }

?>