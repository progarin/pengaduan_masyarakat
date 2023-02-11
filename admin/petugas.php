<?php

session_start();

if (isset($_SESSION['status_login'])) {
    if ($_SESSION['role'] == 'admin') {
        header("Location:admin.php");
    }
} else {
    header("Location:login.php");
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
    <link rel="stylesheet" href="../css/dashboard.css">

    <title>LaporGo | Petugas</title>
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
                            <a class="nav-link active" aria-current="page" href="index.php">
                                <span data-feather="home"></span>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pengaduan.php">
                                <span data-feather="file"></span>
                                All Pengaduan
                            </a>
                            <ul class="flex-column ms-3">
                                <li class="nav-item">
                                    <a href="tanggapan/belum.php" class="nav-link">Belum Ditanggapi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tanggapan/proses.php" class="nav-link">Proses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tanggapan/selesai.php" class="nav-link">Selesai</a>
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
                    <h1 class="h2">Welcome Home | <?= $_SESSION['nama_petugas'] ?></h1>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-3 p-4 bg-primary mx-3 text-white shadow-sm border border-info rounded-3 ">
                            <h4>Laporan Terkirim</h4>
                            <h5>5</h5>
                        </div>
                        <div class="col-sm-3 p-4 bg-warning mx-3 text-white shadow-sm border border-danger rounded-3 ">
                            <h4>Laporan Diproses</h4>
                            <h5>4</h5>
                        </div>
                        <div class="col-sm-3 p-4 bg-success mx-3 text-white shadow-sm border border-primary rounded-3 ">
                            <h4>Laporan Selesai</h4>
                            <h5>1</h5>
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