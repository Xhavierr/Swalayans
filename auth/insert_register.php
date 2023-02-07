<?php
if(isset($_POST['submit'])) {
    include 'koneksi.php';
    $id_user = $_POST["id_user"];
    $nama_user = $_POST["nama_user"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $no_hp = $_POST["no_hp"];
    
    // Query untuk menambahkan data
    $query = "INSERT INTO user VALUES('$id_user','$nama_user','$jenis_kelamin','$username','$password','$no_hp')";
    
    // Eksekusi query
    if(mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}

?>