<?php include'../layout/header.php' ?>
<?php include'navbar.php' ?>
<h2>Ini adalah halaman Admin</h2>
<!-- cek apakah sudah login -->
<?php
session_start();
// kalau statusnya bukan login
if($_SESSION['status']!="login"){
    header("location:../index.php?msg=belum_login");
}
?>

<h4>Halo Selamat Datang Admin</h4>

<?php include'../layout/footer.php' ?>

