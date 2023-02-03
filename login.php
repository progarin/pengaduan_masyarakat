<?php

require 'config.php';

session_start();

if (isset($_SESSION['status_login'])) {
    if ($_SESSION['status_login'] == "yes") {
        header("Location: index.php");
    }
}


$pesan = '';

if (isset($_POST['submit'])) {
    // Tampung data input
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM masyarakat WHERE username='$username'";
    // Eksekusi perintah sql
    $result = mysqli_query($config, $query);

    // Cek jumlah baris
    if (mysqli_num_rows($result) > 0) {
        // Menampung 1 baris data
        $pengguna = mysqli_fetch_assoc($result);

        // Komparasi password
        if (password_verify($password, $pengguna['password'])) {
            $_SESSION['status_login'] = "yes";
            $_SESSION['nik'] = $pengguna['nik'];
            $_SESSION['nama'] = $pengguna['nama'];

            header("Location:index.php");
        } else {
            $pesan = "Password salah";
        }
    } else {
        $pesan = "Username salah";
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

    <title>LaporGo | Login</title>
</head>

<body>
    <main class="form-signin">
        <form action="" method="POST">
            <h1 class="h3 mb-3 fw-normal text-center fw-bold">Sign In</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Login</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>