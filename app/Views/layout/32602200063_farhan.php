<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>Layouting</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-icon">
            <i class="fa-solid fa-circle-user fa-2x"></i>
        </div>
        <div class="navbar-page">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="navbar-sosmed">
            <ul>
                <li><i class="fa-brands fa-linkedin fa-lg"></i></li>
                <li><i class="fa-brands fa-instagram fa-lg"></i></li>
                <li><i class="fa-brands fa-facebook fa-lg"></i></li>
                <li><i class="fa-brands fa-square-whatsapp fa-lg"></i></li>
            </ul>
        </div>
    </div>
    <div class="banner">
        <span class="name">
            Farhan Nur Hidayat
        </span><br>
        <span class="description">
            Mahasiswa Teknik Informatika B Angkatan 2022
        </span>
    </div>
    <?php $this->renderSection("content") ?>
</body>

</html>