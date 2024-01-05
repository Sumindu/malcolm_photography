<?php

include "php/db_conn.php";
include 'header/header.php';
?>

    <!-- End Header Page -->

    <div class="Featured-Galleries container p-4 mt-5">
        <h1 class="title text-center border-0 pt-5">Galleries</h1>
        <div class="row mt-5">

        <?php


            $sql = "SELECT * FROM gallery";

            $result = mysqli_query($conn, $sql);

            $id = 1;

            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $imgUrl = $row['image_url'];
                $catg = $row['image_cat'];

                ?>

            <div class="col-md-4 work py-3">
                <img src="images/<?php echo $row['image_url']; ?>" alt="showcase-image" class="img-fluid">
            </div>
            
            <?php
            } ?>

        </div>
        
        <div class=" d-flex justify-content-center align-items-center my-5">
        <button class="btn navGet-btn"  id="moreBtn" >
                            MORE VIEW <i class="fa-solid fa-arrow-down"></i>
                        </button>
        </div>

    </div>

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