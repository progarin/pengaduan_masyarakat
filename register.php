<?php

require 'config.php';

if (isset($_POST['submit'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $telp = $_POST['telp'];

    $sql = mysqli_query($config, "INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES ('$nik' , '$nama' , '$username' , '$password' , '$telp')");

    if ($sql) {
        header("Location: login.php");
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

    <link rel="stylesheet" href="css/register.css">

    <title>LaporGo | Register</title>
</head>

<body>

    <main class="form-signin">
        <form action="" method="POST">
            <h1 class="h3 mb-3 fw-normal text-center fw-bold">Sign Up</h1>
            <div class="form-floating">
                <input type="number" class="form-control" id="floatingInput" name="nik" placeholder="NIK">
                <label for="floatingInput">NIK</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="nama" placeholder="Nama">
                <label for="floatingInput">Nama</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="number" class="form-control" id="floatingInput" name="telp" placeholder="+62xxx">
                <label for="floatingInput">No Telepon</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Daftar</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>