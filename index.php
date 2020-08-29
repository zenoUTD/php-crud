<h1>Users</h1>
<?php
 include("config.php");
 $result = mysqli_query($conn, "SELECT * FROM users");
?>

<ul>
 <?php while($row = mysqli_fetch_assoc($result)): ?>
 <li>
    [ <a href="user-del.php?id=<?php echo $row['id'] ?>">DEL</a> ]
    [ <a href="user-edit.php?id=<?php echo $row['id'] ?>">Edit</a> ]
    <?php echo $row['name'] ?> -  <?php echo $row['email'] ?>
 </li>
 <?php endwhile; ?>
</ul>

<a href="new-user.php" class="new">New User</a>