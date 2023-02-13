<?php

// mengaktifkan session php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$query = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);

if($cek > 0){
	$data = mysqli_fetch_assoc($query);
	if($data['level']=="admin"){
		$_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../admin.php?page=dashboard");

	}else if($data['level']=="pelanggan"){
		$_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../user.php?page=home");
 
	}else{
        header("location:../index.php?pesan=gagal");
	}	
}else{
    header("location:../index.php?pesan=gagal");
}