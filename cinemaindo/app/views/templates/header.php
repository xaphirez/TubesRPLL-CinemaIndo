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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= BASEURL;?>/home">CinemaIndo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/home">Now Playing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/home">Upcoming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/customer/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/customer/register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>