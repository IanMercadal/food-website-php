<?php include_once './includes/header.php' ?>

    <div style="margin-top: 10px"></div>
    <!-- order section starts -->
    <section class="order" id="order">
        <h3 class="sub-heading">Register</h3>
        <h1 class="heading">Register</h1>

        <form action="">

            <div class="inputBox">
                <div class="input">
                    <span>your name and surname</span>
                    <input type="text" name="name" placeholder="enter your name">
                </div>
                <div class="input">
                    <span>your email</span>
                    <input type="text" name="email" placeholder="enter your email">
                </div>
                <div class="input">
                    <span>your phone</span>
                    <input type="number" name="phone" placeholder="enter your phone">
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