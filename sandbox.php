<html>
    <head>
        <title>Coba coba</title>
    </head>
    <body>
        <h1>Data Obat</h1>

        <form action="" method="get">
            <label for="">Cari</label>
            <input type="text" name="cari">
            <input type="submit" value="cari">
        </form>

        <?php
        include 'config.php';
        // jika form bernama cari sudah di isi (set)
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil Pencarian : ".$cari."</b>";
        }
        ?>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Stok Barang</th>
                <th>Harga Barang</th>
                <th>Deskripsi</th>
                <th>Foto Barang</th>
            </tr>
            <?php
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                // Jika sama dengan pencarian
                $data = mysqli_query($host,"SELECT * from tb_barang where nama_barang LIKE '%".$cari."%' ");
            }else{
                // jika beda, tampilkan semua barang
                $data = mysqli_query($host,"SELECT * from tb_barang");
            }
            $no = 1;
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $d['nama_barang'] ?></td>
                    <td><?php echo $d['stok_barang'] ?></td>
                    <td><?php echo $d['harga_barang'] ?></td>
                    <td><?php echo $d['deskripsi_barang'] ?></td>
                    <td><?php echo $d['foto_barang'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>