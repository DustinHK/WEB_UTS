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
        <form action="scripts/php/req_login.php" method="POST">
            <h1>Login</h1>
                <div class="input-box">
                    <label for="username"></label>
                    <input type="text" placeholder="username" name="username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <label for="password"></label>
                    <input type="password" placeholder="password" name="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
            
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember Me</label>
                    <a href="#">Forgot password</a>
                </div>

                <button type="submit" class="btn" name="login" id="name"><a href="../WEB_UTS/pages/main.php">Login</a></button>

                <div class="register-link">
                    <p>Don't have an account? <a href="../WEB_UTS/pages/register.php">
                    Register</a></p>
                </div>
        </form>

    </div>
    
</body>
</html>
