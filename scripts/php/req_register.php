<?php
require 'koneksi.php';

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO user VALUES ('', '$nim', '$username', '$password', '$nama')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: ../index.php');
        exit;
    } else {
        $error = true;
    }
}
?>