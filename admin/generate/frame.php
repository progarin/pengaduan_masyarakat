<?php

require '../../config.php';

$query = mysqli_query($config, "SELECT * FROM pengaduan");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Frame Generate Laporan</title>
</head>

<body>
    <div class="container p-3">
        <div class="row text-center">
            <div class="col">
                <h2>DATA LAPORAN PENGADUAN MASYARAKAT</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem facilis nulla provident delectus laudantium recusandae eveniet tempora quia in, reprehenderit beatae dicta adipisci minus expedita quo totam, dignissimos quis quas officiis. Odio sequi culpa cumque natus. Asperiores odit commodi delectus beatae officiis? Alias ex deleniti, consectetur similique mollitia et quidem.</p>
                <hr class="border border-primary">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id Pengaduan</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>NIK</th>
                            <th>Isi</th>
                            <th>Foto</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = mysqli_fetch_array($query)) : ?>
                            <tr>
                                <td><?= $data['id_pengaduan'] ?></td>
                                <td><?= $data['judul'] ?></td>
                                <td><?= $data['tgl_pengaduan'] ?></td>
                                <td><?= $data['nik'] ?></td>
                                <td><?= $data['isi_laporan'] ?></td>
                                <td><img src="../../file/<?= $data['foto'] ?>" alt="<?= $data['id_pengaduan'] ?>" height="100" width="100"></td>
                                <td><?= $data['status'] ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>