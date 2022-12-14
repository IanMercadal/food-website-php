<?php include_once './includes/header.php' ?>

    <div style="margin-top: 10px"></div>
    <!-- order section starts -->
    <section class="order" id="order">
        <h3 class="sub-heading">Login</h3>
        <h1 class="heading">login</h1>

        <form action="user_db.php" method="post">

            <div class="inputBox">
                <div class="input">
                    <span>your email</span>
                    <input type="text" name="email" placeholder="enter your email">

                    <a href="/register">¿Need an account?</a>
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>your password</span>
                    <input type="password" name="password">
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                <?php 
                    if(isset($_SESSION["errores"])) {
                        foreach($_SESSION["errores"] as $error) {
                            echo '<span class="error">'.$error.'</span>';
                        }
                    }
                ?>
                </div>
            </div>

            <button type="submit" value="order now" class="btn">Log in</button>
    
        </form>
    
    </section>
    <!-- order section ends -->

<?php include_once './includes/footer.php' ?>