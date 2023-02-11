<?php
session_start();
require '../../config.php';
if (!isset($_SESSION['role'])) {
    header("Location: login.php");
}

$id = $_GET['id'];

$query = mysqli_query($config, "SELECT * FROM tanggapan WHERE id_pengaduan='$id'");
$dataTanggapan = mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../../css/dashboard.css">
    <!-- <link rel="stylesheet" href="css/register.css"> -->
    <title>LaporGo | Tanggapan</title>
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><span class="fw-bold text-danger">Lapor Go</span> | Petugas</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../admin.php">
                                <span data-feather="home"></span>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../pengaduan.php">
                                <span data-feather="file"></span>
                                All Pengaduan
                            </a>
                            <ul class="flex-column ms-3">
                                <li class="nav-item">
                                    <a href="belum.php" class="nav-link">Blm Ditanggapi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="proses.php" class="nav-link">Proses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="selesai.php" class="nav-link">Selesai</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-danger w-50 text-white fw-bold" href="logout.php">
                                <span data-feather="users"></span>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Laporan</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 shadow alert alert-primary">
                            <small><?= $dataTanggapan['tgl_tanggapan'] ?></small>
                            <p><?= $dataTanggapan['tanggapan'] ?></p>
                        </div>
                    </div>
                </div>

                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>