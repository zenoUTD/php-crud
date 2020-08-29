<?php

 include("config.php");
 $id = $_POST['id'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $sql = "UPDATE users SET name='$name', email='$email' WHERE id = $id";
 mysqli_query($conn, $sql);
 header("location: index.php");
 
?>