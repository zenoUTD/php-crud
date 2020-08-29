<?php
 include("config.php");

 $name = $_POST['name'];
 $email = $_POST['email'];

 $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
 mysqli_query($conn, $sql);

 header("location: index.php");
?> 