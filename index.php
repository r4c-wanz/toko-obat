<html>
<head>
    <title>Login Toko Obat</title>
</head>
<body>
    <h3>Login - Toko Obat</h3>
    <br>
    <?php
    // Cek Notifikasi tersedia akun atau tidak
    if(isset($_GET['msg'])){
        if($_GET['msg'] == "gagal"){
            // msg isi gagal
            echo "Login Gagal! User dan Pass Salah!";
        }else if($_GET['msg'] == "logout") {
            // msg isi logout
            echo "Anda Berhasil Logout!";
        }else if($_GET['msg'] == "belum_login") {
            // msg isi belum_login
            echo "Anda harus login dulu!";
        }
    }
    ?>
    <form action="function.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>
</html>