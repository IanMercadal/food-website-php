<?php 
require './dishes_db.php';
include_once './includes/header.php'; 
?>

    <!-- wishlist section starts -->
    <section class="dishes" id="dishes">
        <div style="margin-top: 50px"></div>
        <h3 class="sub-heading">your dishes</h3>
        <h1 class="heading">wishlist</h1>


        <div class="box-container">
            <?php echo getUserDishes() ?>
        </div>
    </section>
    <!-- wishlist section ends -->

<?php include_once './includes/footer.php' ?>