<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <link rel="stylesheet" type="text/css" href="../styles/updet.css">

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
            <a class="sidebar-toggle" onclick="toggleSidebar()">Surat</a>
            <div class="sidebar-content" id="sidebarContent">
                <a href="../pages/page2.php">Jenis Surat</a>
                <a href="../pages/status.php">Status Surat</a>
            </div>
        </div>

        <main class="content">
            <h3>Form Biodata</h3>
            <form action=".php" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap Anda">

                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat Lengkap Anda">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email Anda">

                <label for="jenjang">Jenjang Studi:</label>
                <select id="jenjang" name="jenjang">
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
                    <option value="s3">S3</option>
                </select>

                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" placeholder="NIM Anda">

                <label for="prodi">Program Studi:</label>
                <input type="text" id="prodi" name="prodi" placeholder="Program Studi Anda">

                <label for="ipk">IPK:</label>
                <input type="number" step="0.01" id="ipk" name="ipk" placeholder="IPK Anda">

                <label for="angkatan">Angkatan:</label>
                <input type="number" id="angkatan" name="angkatan" placeholder="Angkatan Anda">

                <label for="kontak">Kontak:</label>
                <input type="text" id="kontak" name="kontak" placeholder="Nomor Kontak Anda">

                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir Anda">

                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir">

                <fieldset>
                    <legend>Jenis Kelamin:</legend>
                    <label for="laki">
                        <input type="radio" id="laki" name="jk" value="l" checked> Laki-laki
                    </label>
                    <label for="perempuan">
                        <input type="radio" id="perempuan" name="jk" value="p"> Perempuan
                    </label>
                </fieldset>

                <div class="form-buttons">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                    <input type="button" value="Update" onclick="updateData()">
                </div>
            </form>
        </main>
    </div>

    <script>
        function updateData() {
            // Implementasi logika pembaruan di sini (biasanya dengan JavaScript atau server-side script).
            alert("Data berhasil diperbarui!");
        }
    </script>
    <script src="../styles/script.js"></script>
   
</body>
</html>
