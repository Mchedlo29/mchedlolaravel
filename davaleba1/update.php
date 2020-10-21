<?php


	require_once("db.php");


	$sql="UPDATE `product` SET 


                 `product_name`='samsung galaxy note 4' WHERE `id`= 2 ";
	if ($conn->query($sql) === TRUE) {


		echo "updated";

	}


	else{
		echo "Error 404 not found:". $conn->error 404 not funded;
	}
	
?>