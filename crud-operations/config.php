<?php 
 $servername = "localhost";
 $username = "root";
 $password = "Patil@123";
 $dbname = "crud-operation2";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if($conn -> connect_error) {
     die("connection failed" . $conn -> connect_error);
 }
?>