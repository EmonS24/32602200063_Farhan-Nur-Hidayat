<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>

<!DOCTYPE html>
<html>

<head>
    <title>Bab 4 Tugas</title>
</head>

<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="experience">Experience</a></li>
        </ul>
    </nav>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <footer>
        <p>Copyright &copy; My Website <?= date('Y') ?></p>
    </footer>
</body>

</html>