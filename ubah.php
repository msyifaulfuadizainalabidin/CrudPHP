<?php
require 'functions.php';

$id = $_GET["id"];

$mhs = query ("SELECT * FROM mahasiswa WHERE id = $id ")[0];

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if (isset ($_POST["submit"])) {
    
    if ( ubah($_POST) > 0) {
        echo " 
        <script>
            alert('Data Berhasil Di Rubah');
            document.location.href = 'index.php';
        </script>
        " ;
    } else {
        echo " <script>
        alert('Data Gagal Di Rubah');
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

        <form method="post" >
            <input type="hidden" name="id" value="<?php echo $mhs["id"]?>"></input>

            <ul>
                <li>
                    <label for="nim">NIM : </label>
                    <input type="text"  id="nim"  name="nim" required value="<?php echo $mhs["nim"]?>"></input>
                </li>
                <li>
                    <label for="nama">Nama : </label>
                    <input type="text"  id="nama"  name="nama" value="<?php echo $mhs["nama"]?>" required></input>
                </li>
                <li>
                    <label for="email">Email : </label>
                    <input type="text"  id="email" name="email" value="<?php echo $mhs["email"]?>" ></input>
                </li>
                <li>
                    <label for="jurusan">Jurusan : </label>
                    <input type="text"  id="email" name="jurusan" value="<?php echo $mhs["jurusan"]?>" ></input>
                </li>
                <li>
                    <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
                </li>
            </ul>

        </form>

    </body>
</html> 