<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <!-- <link rel="stylesheet" href="../styles/regis.css"> -->
    <link rel="stylesheet" href="../styles/updet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<form action="../scripts/php/req_register.php" method="post">
<body>
<main class="content1">
            <h3>Form Biodata</h3>

            <form class="row g-3" action="../scripts/php/req_form.php" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <label for="nama" class="form-label1">Username</label>
                        <input type="text" class="form-control" name="username" value="" required>
                    </div>
                    <div class="col-md-4">
                        <label for="nama" class="form-label1">Password</label>
                        <input type="text" class="form-control" name="password" value="" required>
                    </div>
                    <div class="col-md-4">
                        <label for="nama" class="form-label1">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="" required>
                    </div>
                    <div class="col-md-4">
                        <label for="nim" class="form-label2">NIM</label>
                        <input type="text" class="form-control" name="nim" value="" required>
                    </div>
                    <div class="col-md-4">
                        <label for="prodi" class="form-label2">Program Studi</label>
                        <input type="text" class="form-control" name="prodi" required>
                    </div>
                    <div class="col-md-3 position-relative">
                    <label for="jenjang" class="form-label">Jenjang Studi</label>
                    <select class="form-select" name="jenjang" required>
                        <option selected disabled value="">Pilih</option>
                        <option>D3</option>
                        <option>S1</option>
                        <option>S2</option>
                    </select>
                    </div>
                    <div class="col-md-4">
                        <label for="tempat_lahir" class="form-label3">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" required>
                    </div>
                    <div class="col-md-4">
                        <label for="alamat" class="form-label1">Alamat</label>
                        <input type="text" class="form-control" name="alamat" required>
                    </div>
                    <div class="col-md-4">
                        <label for="no_telepon" class="form-label1">No Telepon</label>
                        <input type="text" class="form-control" name="no_telepon" required>
                    </div>
                    <div class="col-md-4">
                        <label for="tanggal_lahir" class="form-label1">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" required>
                    </div>
                    <div class="col-md-4">
                        <label for="ipk" class="form-label1">IPK</label>
                        <input type="text" class="form-control" name="ipk" required>
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label1">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-4">
                        <label for="angkatan" class="form-label1">Angkatan</label>
                        <input type="text" class="form-control" name="angkatan" required>
                    </div>
                    <div class="col-md-4">
                        <label for="semester" class="form-label1">Semester</label>
                        <input type="text" class="form-control" name="semester" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" name="register">Submit form</button>
                    </div>
                </div>
            </form>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="../styles/script.js"></script>
</body>
</html>