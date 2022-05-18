<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/media-queries.css">
    <link rel="icon" href="https://yt3.ggpht.com/U_DPvvtAw588cllVUEOn0yncBPgQp-FNVC8LOAhkkqt4Vsld90HI5PSrC7nE15LiclOgg1uumA=s88-c-k-c0x00ffffff-no-rj">
    <title>Salmerón</title>
</head>

<body>
    <div class="hamburguer-button">
        <img src="./assets/img/hamburguer-icon-menu.png" alt="Hamburguer icon" id="hamburguer-menu">
    </div>

    <header>

        <?php if ($_SERVER["REQUEST_URI"] == "/My-Website/indexES.php" || $_SERVER["REQUEST_URI"] == "/My-Website/contactES.php" || $_SERVER["REQUEST_URI"] == "/My-Website/projectsES.php") : ?>
            <section class="active-menu" id="hamburguer-nav">
                <ul>
                    <li>
                        <a href="indexES.php">INICIO</a>
                    </li>
                    <li>
                        <a href="contactES.php">CONTACTAME</a>
                    </li>
                    <li>
                        <a href="projectsES.php">PROYECTOS</a>
                    </li>
                </ul>
            </section>
        <?php else : ?>
            <section class="active-menu" id="hamburguer-nav">
                <ul>
                    <li>
                        <a href="index.php">START</a>
                    </li>
                    <li>
                        <a href="contact.php">CONTACT</a>
                    </li>
                    <li>
                        <a href="projects.php">PROJECTS</a>
                    </li>
                </ul>
            </section>
        <?php endif; ?>

        <nav class="window window-nav">
            <div class="window-nav--language">
                <?php if ($_SERVER["REQUEST_URI"] == "/My-Website/index.php") : ?>
                    <a href="./index.php">US</a>
                    <a href="./indexES.php">ES</a>
                <?php endif; ?>
                <?php if ($_SERVER["REQUEST_URI"] == "/My-Website/indexES.php") : ?>
                    <a href="./index.php">US</a>
                    <a href="./indexES.php">ES</a>
                <?php endif; ?>
                <?php if ($_SERVER["REQUEST_URI"] == "/My-Website/projects.php") : ?>
                    <a href="./projects.php">US</a>
                    <a href="./projectsES.php">ES</a>
                <?php endif; ?>
                <?php if ($_SERVER["REQUEST_URI"] == "/My-Website/projectsES.php") : ?>
                    <a href="./projects.php">US</a>
                    <a href="./projectsES.php">ES</a>
                <?php endif; ?>
                <?php if ($_SERVER["REQUEST_URI"] == "/My-Website/contact.php") : ?>
                    <a href="./contact.php">US</a>
                    <a href="./contactES.php">ES</a>
                <?php endif; ?>
                <?php if ($_SERVER["REQUEST_URI"] == "/My-Website/contactES.php") : ?>
                    <a href="./contact.php">US</a>
                    <a href="./contactES.php">ES</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>