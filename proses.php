<?php
session_start();
require 'config.php';

if (!isset($_SESSION['status_login'])) {
    header("Location: login.php");
}


if (isset($_POST['submit'])) {

    $date = date('y-m-d');
    $nik = $_SESSION['nik'];
    $isi = $_POST['isi'];
    $status = 0;

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $location = 'file/';
    $fotoName = rand(0, 10_000) . '-' . $foto;

    move_uploaded_file($tmp, $location . $fotoName);

    $query = "INSERT INTO pengaduan (id_pengaduan, tgl_pengaduan , nik, isi_laporan, foto, status) VALUES (NULL , '$date' , '$nik' , '$isi' , '$fotoName' , '$status')";

    if (mysqli_query($config, $query)) {
        header("Location:index.php");
    }
}
