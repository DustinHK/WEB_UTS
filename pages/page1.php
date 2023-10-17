<?php 
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
    <title>Page 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../styles/updet.css">
    <!-- <link rel="stylesheet" href="../styles/main.css"> -->

</head>
<body>
    <div class="navbar1">
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

        <main class="content1">
            <h3>Form Biodata</h3>
            
            <form class="row g-3">
            <div class="row">
    <div class="col-md-4">
        <label for="validationServer01" class="form-label1">Nama Lengkap</label>
        <input type="text" class="form-control" id="validationServer01" value="asep" required>
    </div>
    <div class="col-md-4">
        <label for="validationServer02" class="form-label2">NIM</label>
        <input type="text" class="form-control" id="validationServer02" value="Otto" required>
    </div>
    <div class="col-md-4">
        <label for="validationServer02" class="form-label2">Program Studi</label>
        <input type="text" class="form-control" id="validationServer02" value="Otto" required>
    </div>
    <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">Jenjang Studi</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">pilih</option>
      <option>D3</option>
      <option>S1</option>
      <option>S2</option>
    </select>
    </div>
    <div class="col-md-4">
        <label for="validationServer03" class="form-label3">Tempat Lahir</label>
        <input type="text" class="form-control" id="validationServer03" value="Otto" required>
    </div>
    <div class="col-md-4">
        <label for="validationServer01" class="form-label1">Alamat</label>
        <input type="text" class="form-control" id="validationServer01" value="asep" required>
    </div>
    <div class="col-md-4">
        <label for="validationServer01" class="form-label1">No Telepon</label>
        <input type="text" class="form-control" id="validationServer01" value="asep" required>
    </div>
    <div class="col-md-4">
        <label for="validationServer01" class="form-label1">Tanggal Lahir</label>
        <input type="date" class="form-control" id="validationServer01" required>
    </div>
    <div class="col-md-4">
        <label for="validationServer01" class="form-label1">IPK</label>
        <input type="text" class="form-control" id="validationServer01" value="asep" required>
    </div>
    <div class="col-md-4">
        <label for="validationServer01" class="form-label1">Email</label>
        <input type="email" class="form-control" id="validationServer01" value="asep" required>
    </div>
    <div class="col-md-4">
        <label for="validationServer01" class="form-label1">Angkatan</label>
        <input type="text" class="form-control" id="validationServer01" required>
    </div>
    <div class="col-md-4">
        <label for="validationServer01" class="form-label1">Semester</label>
        <input type="date" class="form-control" id="validationServer01" required>
    </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
    <script src="../styles/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</body>
</html>
