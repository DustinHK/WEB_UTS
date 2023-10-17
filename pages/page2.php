<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/page2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="navbar">
        <a href="../pages/main.php">Home</a>
        <a href="../pages/about.php">About</a>
        <a href="../index.php">Logout</a>
        <a href="#">      </a>
        <a href="#">      </a>
    </div>


    <div class="sidebar">
        <a href="../pages/main.php">Halaman Utama</a>
        <a href="../pages/page1.php">Profil</a>
        <a class="sidebar-toggle" onclick="toggleSidebar()">Surat</a>
        <div class="sidebar-content" id="sidebarContent">
            <a href="../pages/status.php">Status Surat</a>
        </div>
    </div>
    <div class="cons">
        <div class="box">
            <div class="icon"><i class='bx bxs-book-reader'></i></div>
                <div class="contents">  
                    <a href="../pages/page1.php"><h3>Surat Aktif Kuliah</h3></a>
                </div>
        </div>
        <div class="box">
            <div class="icon"><i class='bx bxs-receipt'></i></div>
                <div class="contents">  
                    <a href="../pages/page1.php"><h3>Transkrip Nilai Sementara</h3></a>
                </div>
        </div>
        <div class="box">
            <div class="icon"><i class='bx bx-paste'></i></div>
                <div class="contents">  
                    <a href="../pages/page1.php"><h3>Surat Keterangan Tugas Akhir</h3></a>
                </div>
        </div>
        <div class="box">
            <div class="icon"><i class='bx bxs-credit-card'></i></div>
                <div class="contents">  
                    <a href="../pages/page1.php"><h3>Surat Rekomendasi Beasiswa</h3></a>
                </div>
        </div>
    </div>
    <script src="../styles/script.js"></script>
    </div>
</body>
</html>
