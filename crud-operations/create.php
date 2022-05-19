<?php 

include "config.php";

if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_post['gender'];
}

$sql = "INSERT INTO `user` ('firstname', 'lastname', 'email', 'password', 'gender')VALUES('$firstname', '$lastname', '$email', '$password', '$gender')";

$result = $conn->query($sql);

if($result == TRUE) {
    echo "New record created successfully";
}

else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<!DOCTYPE html>
<html>
<body>

<h2>Sign-up form</h2>


<form action="" method="POST">
<fieldset> 
    <legend> Personal Information: </legend>
    First Name: <br>
    <input type="text" name="firstname">
    <br>
    Last Name: <br>
    <input type="text" name="lastname">
    <br>
    Gender: <br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="female">female
    <br><br>
    <input type="submit" name="submit" value="submit">
</fieldset>
</form>

</body>
</html>