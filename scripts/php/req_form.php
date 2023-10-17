<?php
require 'req_login.php';
require 'koneksi.php';

session_start();

$userData = $_SESSION["userData"];
$id = $userData["id_user"];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $jenjang = $_POST['jenjang'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $ipk = $_POST['ipk'];
    $email = $_POST['email'];
    $angkatan = $_POST['angkatan'];
    $semester = $_POST['semester'];

    $query = "UPDATE user SET nama_lengkap='$nama', nim='$nim', prodi='$prodi', jenjang_studi='$jenjang', tempat_lahir='$tempat_lahir', alamat='$alamat', no_telepon='$no_telepon', tanggal_lahir='$tanggal_lahir', ipk='$ipk', email='$email', angkatan='$angkatan', semester='$semester' WHERE id_user=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "
        <script>
            alert('Data berhasil diubah!');
            window.location.href='../../pages/page1.php';
        </script>
        ";
        // header('Location: ../../pages/main.php');
        // exit;
    } else {
        $error = true;
    }
}
?>