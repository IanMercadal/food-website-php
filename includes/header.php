<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resto</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">

    </head>
    <body>
    <!-- header section starts  -->

    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>resto.</a>
        <nav class="navbar">
            <a class="active" <?php if($_SERVER['REQUEST_URI'] !== '/') { ?>  href="/" <?php } ?> id="home-nav" href="#home">home</a>
            <a <?php if($_SERVER['REQUEST_URI'] !== '/') { ?>  href="/" <?php } ?> href="#dishes" id="dishes-nav">dishes</a>
            <a <?php if($_SERVER['REQUEST_URI'] !== '/') { ?>  href="/" <?php } ?> href="#about" id="about-nav">about</a>
            <a <?php if($_SERVER['REQUEST_URI'] !== '/') { ?>  href="/" <?php } ?> href="#menu" id="menu-nav">menu</a>
            <a <?php if($_SERVER['REQUEST_URI'] !== '/') { ?>  href="/" <?php } ?> href="#review" id="review-nav">review</a>
            <a <?php if($_SERVER['REQUEST_URI'] !== '/') { ?>  href="/" <?php } ?> href="#order" id="order-nav">order</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <a <?php session_start(); if(isset($_SESSION['usuario'])) { ?> href="/wishlist"<?php } ?> href="/login" class="fas fa-heart"></a>
            <a <?php if(isset($_SESSION['usuario'])) { ?> href="/user"<?php } ?> href="/login" class="fas fa-solid fa-user"></a>
        </div>
    </header>

    <!-- header section ends  -->