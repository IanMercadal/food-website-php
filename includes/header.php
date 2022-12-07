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
        <link rel="stylesheet" href="../css/style.css">

        <link rel="icon" type="image/x-icon" href="../images/">

    </head>
    <body>
    <!-- header section starts  -->

    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>resto.</a>
        <nav class="navbar">
            <a <?php if($_SERVER['SCRIPT_NAME']=="/index.php") { ?> class="active"<?php } ?> id="home-nav" href="index.php">home</a>
            <a <?php if($_SERVER['SCRIPT_NAME']=="/dishes.php") { ?> class="active"<?php } ?> href="dishes.php" id="dishes-nav">dishes</a>
            <a <?php if($_SERVER['SCRIPT_NAME']=="/about.php") { ?> class="active"<?php } ?> href="about.php" id="about-nav">about</a>
            <a <?php if($_SERVER['SCRIPT_NAME']=="/menu.php") { ?> class="active"<?php } ?> href="menu.php" id="menu-nav">menu</a>
            <a <?php if($_SERVER['SCRIPT_NAME']=="/review.php") { ?> class="active"<?php } ?> href="review.php" id="review-nav">review</a>
            <a <?php if($_SERVER['SCRIPT_NAME']!=="/index.php") { ?> href="index.php"<?php } ?> href="#order" id="order-nav">order</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="login.php" class="fas fa-solid fa-user"></a>
        </div>
    </header>

    <!-- header section ends  -->

    <!-- search form -->
    <form action="" id="search-form">
        <input type="text" placeholder="Search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!-- search form -->