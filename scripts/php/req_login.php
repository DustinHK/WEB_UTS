<?php
require 'koneksi.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($result)){
        $userData[] = $row;
    }

    if ($result->num_rows == 1) {
        session_start();
        $_SESSION["userData"] = $userData[0];
        header('Location: ../../pages/main.php');
    } else {
        header('Location: ../../index.php');
    }
}
?>