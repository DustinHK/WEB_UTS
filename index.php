<?php
    require 'scripts/php/koneksi.php';

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                header('Location: pages/main.php');
                exit;
            }
        } else {
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../WEB_UTS/styles/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body >
    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="username"
                    required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="password"
                    required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
            
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember Me</label>
                    <a href="#">Forgot password</a>
                </div>

                <button type="submit" class="btn"><a href="../WEB_UTS/pages/main.php">Login</a></button>

                <div class="register-link">
                    <p>Don't have an account? <a href="../WEB_UTS/pages/register.php">
                    Register</a></p>
                </div>
        </form>

    </div>
    
</body>
</html>
