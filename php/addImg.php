<?php
include "db_conn.php";

if (isset($_POST['catg'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $catg = validate($_POST['catg']);

    if (empty($catg)) {
        header("Location: ../new-image.php?error=All fields are required");
        exit();
    } else {
        if (isset($_FILES['imgUrl']['error']) === 4) {
            header("Location: ../new-image.php?error=Image Does Not Exist");
            exit(); 
        }else {
            $img_name = $_FILES['imgUrl']['name'];
            $img_size = $_FILES['imgUrl']['size'];
            $tmp_name = $_FILES['imgUrl']['tmp_name'];

            $allowed_exs = ['jpg', 'jpeg', 'png'];
            $img_ex = explode('.' , $img_name);
            $img_ex = strtolower(end($img_ex));

            if(!in_array($img_ex, $allowed_exs)) {
                header("Location: ../new-image.php?error=Invalid Image Extension");
                exit(); 
            }
            
            else{
                $new_img_name = uniqid();
                $new_img_name .= "." . $img_ex;

                move_uploaded_file($tmp_name, '../images/' . $new_img_name);

                // // Insert into Database
                // $sql = "INSERT INTO gallery (image_url, image_cat) VALUES (?, ?)";
                // $stmt = $conn->prepare($sql);

                // if($stmt) {
                //     $result = $stmt->execute([$new_img_name, $catg]);

                //     if($result) {
                //         header("Location: ../new-image.php?success=add gallery successfully");
                //         exit();
                //     }else {
                //         header("Location: ../new-image.php?error=Database error");
                //         exit();
                //     }
                // }else {
                //     header("Location: ../new-image.php?error=SQL statement preparation failed");
                //     exit();
                // }

                // Insert into Database
                $sql = "INSERT INTO gallery (image_url, image_cat) VALUES (?, ?)";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $stmt->bind_param("ss", $new_img_name, $catg);
                    $result = $stmt->execute();

                    if ($result) {
                        header("Location: ../new-image.php?success=add gallery successfully");
                        exit();
                    } else {
                        header("Location: ../new-image.php?error=Database error");
                        exit();
                    }
                } else {
                    header("Location: ../new-image.php?error=SQL statement preparation failed");
                    exit();
                }

            }
        }
    }

}else {
    header("Location: ../new-image.php?error=error");
    exit();
}