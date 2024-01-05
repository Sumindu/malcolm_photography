<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | Malcolm</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/mainStyle.css?<?php echo time();?>" rel="stylesheet" />
</head>

<body>
    <!-- Header Page -->
    <div id="header">
        <nav class="navbar navbar-expand-lg fixed-top p-1">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/M-logo.png" alt="logo"></a>
                <div class="justify-content-center">
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.php">Pricing</a>
                        </li>
                        <li class="nav-item selected">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <button class="btn menu-close" onclick="closeMenu()"><i class='bx bx-x'></i></button>
                        <button class="btn navGet-btn">
                            <a href="contact.php" >Contact Us <i class="fa-solid fa-arrow-right"></i></a>
                        </button>
                    </ul>
                </div>
                <button class="btn menu-bar" onclick="openMenu()"><i class='bx bx-menu'></i></button>
            </div>
        </nav>
    </div>

