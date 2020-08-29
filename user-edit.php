<h1>Edit User</h1>
<?php
 include("config.php");
 $id = $_GET['id'];
 $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
 $row = mysqli_fetch_assoc($result);
?>

<form action="user-update.php" method="post">
 <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
 <label for="name">User Name</label>
 <input type="text" name="name" id="name" value="<?php echo $row['name'] ?>">
 <label for="remark">Remark</label>
 <input type="email" name="email" value="<?php echo $row['email'] ?>">
 <br><br>
 <input type="submit" value="Update User">
</form>