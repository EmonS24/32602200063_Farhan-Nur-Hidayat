<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Layouting</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">PORTOFOLIO</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </nav>
    <nav>
        <ul type='none'>
            <li><i class="fa-brands fa-linkedin fa-lg"></i></li>
            <li><i class="fa-brands fa-instagram fa-lg"></i></li>
            <li><i class="fa-brands fa-facebook fa-lg"></i></li>
            <li><i class="fa-brands fa-square-whatsapp fa-lg"></i></li>
        </ul>
    </nav>
    <span>
        Farhan Nur Hidayat
    </span><br>
    <span>
        Mahasiswa Angkatan 2022
    </span>
    <?php $this->renderSection("content") ?>
    <main></main>
</body>

</html>