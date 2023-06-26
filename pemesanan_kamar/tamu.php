<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <title>TAMU</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">PEMESANAN KAMAR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kamar.php">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservasi.php">Reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tamu.php ">Tamu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Tamu</h1>
        <table class="table align-middle table-bordered mt-3">
            <thead>
                <tr>
                    <th>
                        <center>No.</center>
                    </th>
                    <th>Id Tamu</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. Telephone</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>111</td>
                    <td>Mahmudi</td>
                    <td>Bondowoso</td>
                    <td>085345678901</td>
                    <td>mahmudiaja0@gmail.com</td>
                    <td>
                        <a href="index.php?ubah=<?php echo $result['id_gaji']; ?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="proses.gaji.php?hapus=<?php echo $result['id_gaji']; ?>" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin Ingin Mengirim Uang???')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="index.php" type="button" class="btn btn-primary mb-3">
            <i class="fa fa-plus"></i>
            Tambah Data
        </a>
        <!-- Optional JavaScript; choose one of the two! -->

        <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>