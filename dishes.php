<?php
require './dishes_db.php'; 
include_once './includes/header.php' 
?>

    <div style="margin-top: 100px"></div>
    <!-- menu section starts -->
    <section class="dishes" id="dishes">
        <h3 class="sub-heading">our dishes</h3>
        <h1 class="heading">popular dishes</h1>

        <div class="box-container">
            <?php echo getDishes(0) ?>
        </div>
    </section>
    <!-- menu section ends -->

<?php include_once './includes/footer.php' ?>