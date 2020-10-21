<?php

	if (isset($_POST["product_name"],$_POST["description"])) {



		require_once("db.php");



		$product_name= mysqli_real_escape_string($conn, $_POST["product_name"]);


		$description= mysqli_real_escape_string($conn, $_POST["description"]);


        $sql="INSERT INTO `product`(`product_name`, `description`) 

        

            VALUES ('$product_name', '$description')";


		$restul=$conn->query($sql);



		if ($conn->query($sql) === TRUE) {

            echo "product added succesfuly";



        }



        else {

            echo "error". $conn->error;
        }

	}


 ?>