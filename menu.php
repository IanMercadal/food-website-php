<?php 
require './menu_db.php';
include_once './includes/header.php' 
?>
    <!-- menu section starts -->
    <section class="menu" id="menu">
        <div style="margin-top: 50px"></div>
        <h3 class="sub-heading">our menu</h3>
        <h1 class="heading">all speciality</h1>

        <div class="box-container">
            <?php echo getMenu(0) ?>
        </div>
    </section>
    <!-- menu section ends -->

<?php include_once './includes/footer.php' ?>