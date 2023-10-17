<?php
require 'koneksi.php';
require 'req_login.php';

session_start();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jenjang = $_POST['jenjang'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $ipk = $_POST['ipk'];
    $angkatan = $_POST['angkatan'];
    $kontak = $_POST['kontak'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];

    $query = 
            "INSERT INTO user (id_user, nim, username, password, nama_lengkap) 
            VALUES ('', '$nim', '$username', '$password', '$nama')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: ../../index.php');
        exit;
    } else {
        $error = true;
    }
}
?>