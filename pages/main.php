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
                    <h3>Nama</h3>
                    <h3>Nim</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, atque aliquam ea voluptate est voluptatem corrupti aperiam saepe dignissimos architecto excepturi laborum consequatur velit, voluptates nostrum, consectetur voluptatibus culpa aliquid!.</p>
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
              </header>
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
