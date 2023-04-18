<?php
    // periksa apakah session id_admin telah diset atau belum

    if (isset($_SESSION['id'])) {
        $is_logged_in = true;
    } else {
        $is_logged_in = false;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href=" <?= BASEURL; ?> /css/bootstrap.css">
    <link rel="stylesheet" href=" <?= BASEURL; ?> /css/Style.css">
    </link>
</head>

<body>
    <div class="bg-secondary text-white">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= BASEURL; ?>/admin/login"><span class="text-danger">Cinema</span>Indo
                    Admin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php if (isset($is_logged_in) && $is_logged_in): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/admin/tambah_film">Tambah Film</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/admin/addSession">Tambah Sesi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">View All Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/admin/logout">Log-Out</a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/admin/login">Log-in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/customer/home">Back To Customer Side</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>