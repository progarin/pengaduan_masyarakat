<?php

require '../../config.php';

$id = $_GET['id'];
$status = "proses";

$dataStatus = mysqli_query($config, "UPDATE pengaduan SET status='$status' WHERE id_pengaduan='$id'");

if ($dataStatus) {
    header("Location:proses.php");
}
