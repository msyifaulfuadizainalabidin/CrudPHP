<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari di tekan
if ( isset ($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            Login
        </title>
    </head>
    
    <body>
        <h1> Data Mahasiswa</h1>

        <form method="post" action="">
            <input type="text" placeholder="Cari Nama" name="keyword" autofocus autocomplete="off" size="28"></input>
            <button type="submit" name="cari" class="btn btn-primary">Cari</button>
            <br>
            <br>
        </form>

        <button type="submit" class="btn btn-primary"><a href="tambah.php"> Tambahkan Data Mahasiswa </a>
        </button>
        <br>
        <br>

        <table border="1" cellpadding="10" cellspacing="0" >
            <tr>
                <th>No Urut</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row ) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["nim"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["jurusan"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td>
                    <a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> || 
                    <a href="hapus.php?id=<?php echo $row["id"]; ?>">hapus</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>
        </table>
    </body>
</html> 