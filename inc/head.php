<?php
 include("database_Connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0"> <!--user-scalable=0 bu kod ile sitenin mobilde yakınlaşırma ve uzaklaştırmayı önlüyor.-->
    <title>Responsive Personal Portfolio Website Design | Fırat</title>

    <!--alt satır font awesome ile bağlantıyı sağlıyor-->
    <script src="https://kit.fontawesome.com/0761d8fd00.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header design-->
    <header class="header">
        <a href="#" class="logo">Portfolio</a>

        <i class="fa-sharp fa-solid fa-bars" id="menu-icon"></i>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
