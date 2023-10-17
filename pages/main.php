<?php 
require '../scripts/php/req_login.php';

session_start();

if (!isset($_SESSION["userData"])) {
    header('Location: ../index.php');
    exit;
}

$userData = $_SESSION["userData"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" type="text/css" href="../styles/main.css                                                         ">
</head>
<body>
    <div class="navbar">
        <a href="../pages/main.php">Home</a>
        <a href="../pages/about.php">About</a>
        <a href="../index.php">Logout</a>
        <a href="#">      </a>
        <a href="#">      </a>


    </div>

    <div class="container">
        <div class="sidebar">
            <a href="../pages/main.php">Halaman Utama</a>
            <a href="../pages/page1.php">Profil</a>
            <a class="sidebar-toggle" onclick="toggleSidebar()">Surat</a>
            <div class="sidebar-content" id="sidebarContent">
                <a href="../pages/page2.php">Jenis Surat</a>
                <a href="../pages/status.php">Status Surat</a>
            </div>
        </div>
    
        <div class="content">
            <h2 style="font-weight: 900;">Halaman Utama</h2>
            <div class="card">
                <!-- <img src="https://via.placeholder.com/150" alt="Card Image"> -->
                <div class="card-content">
                    <h3 style="font-size: 32px;"><?php echo $userData["nama_lengkap"]?></h3>
                    <h3 style="font-size: 28px;"><?php echo $userData["nim"]?></h3>
                    <?php if ($userData["jenjang_studi"] != null) { ?>
                        <h3 style="font-size: 28px;"><?php echo $userData["jenjang_studi"]?></h3>
                    <?php } else { ?>
                        <h3 style="font-size: 28px;"></h3>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="wrapper">
                <p class="current-date"></p>
                <div class="icons">
                    <span id="prev" class="previous round">&#8249;</span>
                    <span id="next" class="next round">&#8250;</span>
                </div>
                <div class="calendar">
                    <ul class="weeks">
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                    </ul>
                    <ul class="days"></ul>
                </div>
            </div>
        </div>

    <script src="../styles/script.js"></script>
</body>
</html>
