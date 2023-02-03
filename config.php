<?php

$config = mysqli_connect('localhost', 'root', '', 'pengaduan_masyarakat');

if (!$config) {
    die('Gagal Menyambung: ');
}
