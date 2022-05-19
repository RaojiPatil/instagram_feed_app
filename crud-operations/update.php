<?php  

 include "config.php";

 if(isset($_POST['update'])) {
     $firstname= $_POST['firstname'];
     $user_id = $_POST['lastname'];
     $lastname = $_POST['email'];
     $email = $_POST['gender'];
     $password= $_POST['password'];

     $sql = "UPDATE 'user' SET 'firstname' = '$firstname', 'lastname' = '$lastname', 'email' = '$email', 'password'='$password', 'gender'='$gender' WHERE 'id'='$user_id'";

     $result = $conn->query($sql);

     if($result == TRUE) {
         echo "Record updated succesfully";
     } 
     else {
         echo "Error:" . $sql . "<br>" . $conn->error;
     }
 }



 if(isset($_GET['id'])) {
     $user_id = $_GET['id'];

     $sql = "SELECT *'user' WHERE 'id'= '$user_id'";
     $result = $conn->query($sql);

     if($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
             $firstname =$row['firstname'];
             $lastname = $row['lastname'];
             $email = $row['email'];
             $password = $row['password'];
             $gender = $row['gender'];
             $id = $row['id'];
         }
         ?>
         <h2>user update form</h2>
         <form action="" method="post">
             <?php
     }
 }

?>
