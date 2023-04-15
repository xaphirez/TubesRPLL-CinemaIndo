<?php
    // periksa apakah session id_user telah diset atau belum
    session_name("customer_session");
    if (isset($_SESSION['id_user'])) {
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= BASEURL;?>/customer/index"><span class="text-danger">Cinema</span>Indo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/Film/NowPlaying">Now Playing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/Film/Upcoming">Up Coming</a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <?php if (isset($is_logged_in) && $is_logged_in): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/sesi/index">Beli Tiket</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                                <ul class="dropdown-menu dropdown-menu-dark"
                                    aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= BASEURL; ?>/customer/profile">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= BASEURL; ?>/customer/history">History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= BASEURL; ?>/customer/logout">Logout</a>
                                    </li>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= BASEURL; ?>/customer/login">Login as Customer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= BASEURL; ?>/admin/login">Login as Admin</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/customer/register">Register</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>