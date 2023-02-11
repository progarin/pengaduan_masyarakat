<?php

require '../../config.php';

$id = $_GET['id'];
$status = "selesai";

$dataStatus = mysqli_query($config, "UPDATE pengaduan SET status='$status' WHERE id_pengaduan='$id'");

if ($dataStatus) {
    header("Location:selesai.php");
}
