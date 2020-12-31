
<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn; 

    $nim = $data["nim"];
    $nama = $data["nama"];
    $jurusan = $data["jurusan"];
    $email = $data["email"];

    $query = "INSERT INTO mahasiswa VALUES ('','$nim','$nama','$jurusan','$email')";

    mysqli_query ($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn; 

    mysqli_query ($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn; 

    $id = $data["id"];
    $nim = $data["nim"];
    $nama = $data["nama"];
    $jurusan = $data["jurusan"];
    $email = $data["email"];

    $query = "UPDATE mahasiswa SET 
              nim = '$nim',
              nama = '$nama',
              jurusan = '$jurusan',
              email = '$email'
              WHERE id = $id ";

    mysqli_query ($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM mahasiswa
                WHERE 
                nama LIKE '%$keyword%' OR
                nim LIKE '$keyword' OR
                jurusan LIKE '$keyword' OR
                email LIKE '$keyword' ";

                return query($query); 
}
?>