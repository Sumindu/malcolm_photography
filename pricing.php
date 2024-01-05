<?php

include "php/db_conn.php";
include "header/header.php";
?>

    <!-- Services Page -->
    <div id="services" class="container services-main">
        <div class="container">
            <div class="text-center text-white">
            <h1>Photography services offered by Malcolm</h1>
            <p>Capture the magic of your special day with our photography package.</p>
        </div>
           
            <div class="row">

            <?php

                $sql = "SELECT * FROM services";

                $result = mysqli_query($conn, $sql);

                $id = 1;


                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $first_description = $row['first_description'];
                    $second_description = $row['second_description'];
                    $price = $row['price'];

                    ?>
            
                <div class="col-sm-6 services-cart p-3">
                    <div class="card p-3">
                        <div class="card-body">
                            <h1 class="cart-title text-primary"><?php echo $row['name']; ?></h1>
                            <ul class="cart-ul">
                                <li><?php echo $row['first_description']; ?></il>
                                <li><?php echo $row['second_description']; ?></il>
                            <ul>
                        </div>
                        
                        <div class="cart-footer">
                            <button class="btn navGet-btn">
                                        <a href="#">$ <?php echo $row['price']; ?>.00</a>
                            </button>
                        </div>
                    </div>
                </div>

                <?php
                } ?>

                
            </div>
        </div>
    </div>
    <!-- End Services Page -->

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