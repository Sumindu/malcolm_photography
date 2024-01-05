<?php

include "php/db_conn.php";
include "header/header.php";
?>

        <!-- Contact Page -->
        <div id="contact" class="container mt-5">
        <h1 class="title text-center border-0 pt-5">Contact Us</h1>
        <div class="row">
            <div class="contact-right col text-center">
                <?php if(isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <?php if(isset($_GET['success'])) {?>
                <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                <form action="php/contact.php" method="post">
                    <div class="d-flex gap-4">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    </div>
                    <input type="text" name="phone" placeholder="Phone">
                    <textarea name="message" placeholder="Message" rows="6"></textarea>
                    <button type="submit" class="btn submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Contact Page -->

<!-- footer -->
<?php 
include "footer/footer.php";
?>

    <!-- Customized JavScript -->
    <script src="js/my-script.js"></script>
    <script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
</body>

</html>