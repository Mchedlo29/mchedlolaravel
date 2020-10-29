<?php
   $server="localhost";

   $username="root";

   $password="";

   $db="tstdb";

   $conn= new mysqli($server,$username,$password,$db);


   if ($conn->connect_error) {
   	
   	
       die("connection failed");
   }    
?>