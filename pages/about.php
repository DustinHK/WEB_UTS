<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
</head>

<body>
    <div class="navbar">
        <a href="../pages/main.php">Home</a>
        <a href="../pages/about.php">About</a>
        <a href="../index.php">Logout</a>
        <a href="#"> </a>
        <a href="#"> </a>
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
            <h2>About Us</h2>
            <p>We are a team of passionate individuals dedicated to creating awesome websites and web applications.</p>
            <p>Contact us at: example@email.com</p>
        </div>
        <div class="card">
            <img src="image.jpg" alt="Card Image">
            <h3>Card Title</h3>
            <p>This is a simple card example. You can add content here.</p>
            <a href="#">Learn More</a>
        </div>

        <div class="card">
            <img src="image2.jpg" alt="Card Image 2">
            <h3>Another Card</h3>
            <p>This is another card with different content.</p>
            <a href="#">Explore</a>
        </div>
        <script src="../styles/script.js"></script>
    </div>
</body>

</html>