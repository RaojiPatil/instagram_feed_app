<?php 
  include "config.php";

  $sql = "SELECT *FROM user";

  $result = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
</head>
<body>
    <div>
        <h2>user</h2>
        <table>
            <head>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>gender</th>
                    <th>Action</th>
                </tr>
            </head>
        </table>
        <?php 
        if($result->num_rows>0) {
            while($row = $result->fetch_assoc()) {
                
        ?>
        <tr>
        <td><?php echo $row['id']?> </td>
        <td><?php echo $row['firstname']?> </td>
        <td><?php echo $row['lastname']?> </td>
        <td><?php echo $row['email']?> </td>
        <td><?php echo $row['gender']?> </td>
        <td> <a class="btn" href="update.php?id<?php echo $row['id'];?>">Edit</a>
        &nbsp;<a class="btn" href="delete.php?id=<?php echo $row['id'];?>"></a></td>
        </tr>

        <?php  }
        }
        ?>
        
    </div>
</body>
</html>