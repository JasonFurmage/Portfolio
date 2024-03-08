<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $pageTitle; ?>
    </title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/application.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/8736d823db.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">
</head>
<body>

    <!-- Hamburger -->

    <div class="hamburger">
        <div class="hamburger-bar"></div>
        <div class="hamburger-bar"></div>
        <div class="hamburger-bar"></div>
    </div>

    <!-- Sidebar -->

    <div class="sidebar" id="js-sidebar">
        <a class="sidebar_header" href="index.php">JF</a>
        <div class="sidebar-divider"></div>
        <div class="sidebar_links">
            <a href="about.php"><strong>About Me</strong></a>
            <a href="index.php#portfolio"><strong>My Portfolio</strong></a>
            <a href="examples.php"><strong>Coding Examples</strong></a>
            <a href="scs.php"><strong>SCS Scheme</strong></a>
            <a href="index.php#form"><strong>Contact Me</strong></a>
        </div>
        <div class="sidebar_social">
            <a href="https://apps.apple.com/om/developer/jason-furmage/id1199105236" target="_blank"><i class="fa-brands fa-apple"></i></a>
            <a href="https://www.linkedin.com/in/jason-furmage-9439192a7/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://github.com/JasonFurmage/" target="_blank"><i class="fa-brands fa-github"></i></a>
        </div>
    </div>

    <!-- Content -->

    <div class="content">

        <header>

            <!-- Banner -->

            <div class="banner" id="top">
                <h1 id="js-heading"><?php echo $title; ?></h1>
                <p id="js-subheading"><?php echo $subtitle; ?></p>
                <div class="banner_scroll-down">
                    Scroll Down
                    <a href="#<?php echo $heading; ?>"><i class="fa-solid fa-chevron-down"></i></a>
                </div>
            </div>

        </header>