<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows == 1) {
        header('Location: ../../pages/main.php');
    } else {
        header('Location: ../../index.php');
    }
}
?>