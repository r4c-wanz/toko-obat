<?php
// aktifkan session
session_start();

// connect to database
include 'config.php';

// ambil data dari form
$user = $_POST['user'];
$pass = $_POST['pass'];

// menyeleksi data username dan password
$data = mysqli_query($host,"SELECT * FROM tb_user WHERE username='$user' AND password='$pass' ");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// menyeleksi
if($cek > 0){
    $_SESSION['user'] = $user;
    header("location:admin/index.php");
}else{
    header("location:index.php?msg=gagal");
}
?>