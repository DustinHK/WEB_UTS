<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/status.css">
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
            <a href="../pages/page2.php">Jenis Surat</a>
        </div>
    </div>
    <section class="dash-main">
    <h1>Status Surat</h1>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Jenis Surat</th>
                    <th>Status Surat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Surat Aktif Kuliah</td>
                    <td>Pending</td>
                    <td class="action">
                        <a href=#><button name="detail" class="detail-btn">Detail</button></a>
                        <a href=""><button class="edit-btn">Terima</button></a>
                        <a href=""><button class="delete-btn">Tolak</button></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Surat Aktif Kuliah</td>
                    <td>Pending</td>
                    <td class="action">
                        <a href=#><button name="detail" class="detail-btn">Detail</button></a>
                        <a href=""><button class="edit-btn">Terima</button></a>
                        <a href=""><button class="delete-btn">Tolak</button></a>

                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Surat Aktif Kuliah</td>
                    <td>Pending</td>
                    <td class="action">
                        <a href=#><button name="detail" class="detail-btn">Detail</button></a>
                        <a href=""><button class="edit-btn">Terima</button></a>
                        <a href=""><button class="delete-btn">Tolak</button></a>

                    </td>
                </tr>

            </tbody>
        </table>
    </section>
    <script src="../styles/script.js"></script>
</body>
</html>