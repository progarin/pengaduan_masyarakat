<?php
require 'config.php';
// require 'function.php';
session_start();
if (!isset($_SESSION['status_login'])) {
    header("Location: login.php");
}
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
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- <link rel="stylesheet" href="css/register.css"> -->
    <title>LaporGo | Home</title>
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><span class="fw-bold text-danger">Lapor Go</span> | Masyarakat</a>
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
                            <a class="nav-link " aria-current="page" href="index.php">
                                <span data-feather="home"></span>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="pengaduan.php">
                                <span data-feather="file"></span>
                                Buat Laporan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="laporan.php">
                                <span data-feather="file"></span>
                                Laporan
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Tanggapan
                            </a>
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
                    <h1 class="h2">Membuat Laporan</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <form action="proses.php" method="POST" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="judul">
                                    <label for="floatingInput">Judul Laporan</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="floatingInput" name="isi"></textarea>
                                    <label for="floatingInput">Isi Laporan</label>
                                </div>
                                <!-- file photo -->
                                <input type="file" class="form-control mb-3" id="floatingInput" name="foto">
                                <!-- =========== -->
                                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Lapor!</button>
                            </form>
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