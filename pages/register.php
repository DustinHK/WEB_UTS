<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="../styles/regis.css">
</head>
<body>
    <section class="regis">
        <div class="regis-form-container">
            <h1>REGISTER</h1><hr><br>
            <form action="../scripts/php/req_register.php" method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="textfield">
                <label for="nim">NIM</label>
                <input type="text" name="nim" class="textfield">
                <label for="username">Username</label>
                <input type="text" name="username" class="textfield">
                <label for="pw">Password</label>
                <input type="password" name="password" class="textfield">
                <div class ="wrapper">
                    <button type="submit" class="btn" name="register" id="register">Submit</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>