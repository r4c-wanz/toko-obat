<?php
// mengaktifkan session
session_start();

// menghapus semua semua semua semua session
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
header("location:../index.php?msg=logout");
?>