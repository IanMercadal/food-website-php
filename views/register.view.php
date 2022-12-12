<?php include_once './includes/header.php' ?>
    <div style="margin-top: 50px"></div>
    <!-- order section starts -->
    <section class="order" id="order">
        <h3 class="sub-heading">Register</h3>
        <h1 class="heading">Register</h1>

        <form action="register_db.php" method="post">

            <div class="inputBox">
                <div class="input">
                    <span>your name</span>
                    <input type="text" name="nombre" placeholder="enter your name">
                </div>
                <div class="input">
                    <span>your surname</span>
                    <input type="text" name="apellido" placeholder="enter your surname">
                </div>

                <div class="input">
                    <span>your phone</span>
                    <input type="number" name="telefono" placeholder="enter your phone">
                </div>

                <div class="input">
                    <span>your email</span>
                    <input type="text" name="correo" placeholder="enter your email">
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>your password</span>
                    <input type="password" name="password">
                </div>
                <div class="input">
                    <span>repeat your password</span>
                    <input type="password" name="re-password">
                </div>
            </div>
    
            <button type="submit" value="order now" class="btn">Register</button>
    
        </form>
    
    </section>
    <!-- order section ends -->

<?php include_once './includes/footer.php' ?>