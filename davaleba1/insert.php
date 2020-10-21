<?php
    require_once("db.php");

    if (isset($_GET["product_name"])) {

        $product_name= mysqli_real_escape_string($conn, $_GET["product_name"]);

        $sql="INSERT INTO `product`(`product_name`, `description`) 
        
            VALUES ('$product_name', 'some descrb')";




        if ($conn->query($sql) === TRUE) {

            echo "success";

        }

        else {

            echo "error". $conn->error;
        }

    } 

?>