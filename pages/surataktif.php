<?php
require '../scripts/php/koneksi.php';
require '../scripts/php/req_login.php';

session_start();

$userData = $_SESSION["userData"];
$id = $userData["id_user"];

$query = "SELECT * FROM users WHERE id_user=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$nama = $row['nama_lengkap'];
$nim = $row['nim'];
$prodi = $row['prodi'];
$jenjang = $row['jenjang_studi'];
$tempat_lahir = $row['tempat_lahir'];
$alamat = $row['alamat'];
$no_telepon = $row['no_telepon'];
$tanggal_lahir = $row['tanggal_lahir'];
$ipk = $row['ipk'];
$email = $row['email'];
$angkatan = $row['angkatan'];
$semester = $row['semester'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Aktif Kuliah</title>
    <link rel="stylesheet" href="../styles/surataktif.css">
</head>
<body>
    <div class="letter">
        <div class="header">
            <div class="institution-logo">
                <img src="../assets/img/logo.png" alt="Logo Institusi">
            </div>
            <div class="institution-name">
                <h1>Universitas Mulawarman</h1>
            </div>
        </div>

        <div class="content">
            <h2>SURAT AKTIF KULIAH</h2>
            <hr>
            <p>Yang bertanda tangan di bawah ini Dekan Fakultas Teknik Universitas Mulawarman menerangkan bahwa dengan ini kami memberikan surat tanda aktif kuliah kepada mahasiswa berikut:</p>
            <br>
            <ul>
                <pre>Nama                             : <?php echo $nama?></pre><br>
                <pre>NIM                               : <?php echo $nim?></pre><br>
                <pre>Tempat/Tgl. Lahir          : <?php echo $tempat_lahir . ", " . $tanggal_lahir?></pre><br>
                <pre>Program Studi                : <?php echo $prodi?></pre><br>
                <pre>Jenjang Studi                  : <?php echo $jenjang?></pre><br>
                <pre>Semester                        : <?php echo $semester?></pre><br>
                <pre>Alamat Lengkap            : <?php echo $alamat?></pre><br>
                <pre>No. HP                           : <?php echo $no_telepon?></pre><br>
            </ul>
            <br>
            <p>Bahwa yang bersangkutan adalah mahasiswa Fakultas Teknik Universitas Mulawarman masih aktif dan terdaftar pada SEMESTER GANJIL TAHUN AKADEMIK 2023/2024.</p>

            <p>Demikian Surat Keterangan itu dibuat untuk dipergunakan sebagaimana mestinya.</p>
        </div>
        <div class="footer">
            <p>Tertanda,</p>
            <p>Nama Pejabat Institusi</p>
        </div>
    </div>
</body>
</html>
