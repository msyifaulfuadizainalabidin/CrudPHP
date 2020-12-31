<?php
require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if (isset ($_POST["submit"])) {
    
    if ( tambah($_POST) > 0) {
        echo " 
        <script>
            alert('Data Berhasil Di Tambahkan');
            document.location.href = 'index.php';
        </script>
        " ;
    } else {
        echo " <script>
        alert('Data Gagal Di Tambahkan');
        document.location.href = 'index.php';
        </script>"; 
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            Data Mahasiswa Baru
        </title>
    </head>
    
    <body>
        <h1> Data Mahasiswa Baru</h1>

        <a href="index.php">Kembali Ke Menu Utama</a>

        <form method="post" action="">

            <ul>
                <li>
                    <label for="nim">NIM : </label>
                    <input type="text"  id="nim"  name="nim" required></input>
                </li>
                <li>
                    <label for="nama">Nama : </label>
                    <input type="text"  id="nama"  name="nama" required></input>
                </li>
                <li>
                    <label for="email">Email : </label>
                    <input type="text"  id="email" name="email" ></input>
                </li>
                <li>
                    <label for="jurusan">Jurusan : </label>
                    <input type="text"  id="email" name="jurusan" ></input>
                </li>
                <li>
                    <button type="submit" name="submit" class="btn btn-primary">Tambahkan</button>
                </li>
            </ul>

        </form>

    </body>
</html> 