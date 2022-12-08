<?php
require './dishes_db.php'; 
include_once './includes/header.php' 
?>
    <!-- menu section starts -->
    <section class="dishes" id="dishes">
        <div style="margin-top: 50px"></div>
        <h3 class="sub-heading">our dishes</h3>
        <h1 class="heading">all dishes</h1>

        <div class="box-container">
            <?php echo getDishes(0) ?>
        </div>
    </section>
    <!-- menu section ends -->

<?php include_once './includes/footer.php' ?>