<?php

require 'config/database.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog Website</title>
<!-- CUSTOM STYLESHEET -->
<link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
<!-- Icons CDN -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;800&display=swap" rel="stylesheet">
</head>
<body>
<nav>
    <div class="container nav__container">
        <a href="<?= ROOT_URL ?>" class="nav__logo">YELKHAN</a>
        <ul class="nav__items">
            <li><a href="<?= ROOT_URL ?>blog.php">Блог</a></li>
            <li><a href="<?= ROOT_URL ?>about.php">О нас</a></li>
            <li><a href="<?= ROOT_URL ?>services.php">Сервисы</a></li>
            <li><a href="<?= ROOT_URL ?>contact.php">Контакты</a></li>
            <!-- <li><a href="<?= ROOT_URL ?>singin.php">Вход</a></li> -->
            <li class="nav__profile">
                <div class="avatar">
                    <img src="./images/image_avatar.jpg">
                    <ul>
                        <li><a href="<?= ROOT_URL ?>admin/dashboard.php">Приборная панель</a></li>
                        <li><a href="<?= ROOT_URL ?>logout.php">Выход</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn"><i class="uil uil-times"></i></button>
    </div>
</nav>
<!-- ----------------------END NAVBAR---------------------- -->

