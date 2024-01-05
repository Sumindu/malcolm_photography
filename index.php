<?php

include "php/db_conn.php";
include "header/header.php";

?>

        <!-- Hero Section -->
        <div class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <h1>Malcolm Lismore</h1>
                        <h3>Capturing the Beauty of Nature</h3>
                        <p>Meet Malcolm Lismore, your dedicated freelance photographer based on the enchanting North West coast of Scotland. With a profound love for the natural world, Malcolm has transformed his passion into mesmerizing visual narratives.</p>
                        <button class="btn btn-yellow-btn">
                            <a href="about-us.php" >EXPLORE MALCOLM LISMORE <i class="fa-solid fa-arrow-right"></i></a>
                        </button>
                    </div>
                    <div class="col-md-6 image-column">
                        <img src="images/bg-image.png" alt="showcase-image">
                    </div>
                </div>
            </div>
        </div>

    </div>


    

    <div class="Featured-Galleries container p-4">
        <h1 class="title">Featured Galleries</h1>
        <div class="row mt-5">
            <div class="col-md-4 ">
                <img src="images/658bffaa6c9f8.jpeg" alt="showcase-image" class="img-thumbnail">
            </div>
            <div class="col-md-4">
                <img src="images/650de1999a259.jpg" alt="showcase-image" class="img-thumbnail">
            </div>
            <div class="col-md-4">
                <img src="images/650de1927dcc0.jpg" alt="showcase-image" class="img-thumbnail">
            </div>
        </div>
        
        <div class=" d-flex justify-content-center align-items-center my-5">
        <button class="btn navGet-btn">
                            <a href="gallery.php">GO TO GALLERY</a>
                        </button>
        </div>

    </div>

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
                                        <a href="pricing.php">CHECK THE PRICING</a>
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