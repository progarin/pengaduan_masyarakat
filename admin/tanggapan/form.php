<?php

require '../../config.php';
session_start();

if (isset($_POST['submit'])) {
    $idPengaduan = $_GET['id'];
    $tgl_tanggapan = $_POST['tgl_tanggapan'];
    $tanggapan = $_POST['tanggapan'];
    $id_petugas = $_SESSION['id_petugas'];

    $queryTanggapan = mysqli_query($config, "INSERT INTO tanggapan (id_tanggapan, id_pengaduan ,tgl_tanggapan , tanggapan, id_petugas) VALUES (NULL, '$idPengaduan' , '$tgl_tanggapan' , '$tanggapan' , '$id_petugas')");

    if ($queryTanggapan) {
        header("Location:belum.php");
    }
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

    <link rel="stylesheet" href="../../css/register.css">

    <title>LaporGo | Beri Tanggapan</title>
</head>

<body>

    <main class="form-signin">
        <form action="" method="POST">
            <!-- MENGAMBIL DATA DARI TABEL PENGADUAN -->
            <h2 class="text-center fw-bold mb-3">Beri Tanggapan</h2>
            <!-- <div class="form-floating">
                <input type="hidden" class="form-control" id="floatingInput" name="id_pengaduan" value="<?= $data['id_pengaduan']; ?>" readonly>
            </div>
            <div class="form-floating">
                <label for="floatingInput">Id_petugas</label>
                <input type="hidden" class="form-control" id="floatingInput" name="id_petugas" value="<?= $_SESSION['id_petugas'] ?>" readonly>
            </div> -->
            <!-- -==========- -->
            <div class="form-floating">
                <textarea type="text" class="form-control" id="floatingInput" name="tanggapan" placeholder="Deskripsi" style="height: 100px"></textarea>
                <label for="floatingInput">Deskripsi</label>
            </div>
            <div class="form-floating">
                <input type="date" class="form-control" id="floatingInput" name="tgl_tanggapan">
                <label for="floatingInput">Tanggal</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Kirim</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>