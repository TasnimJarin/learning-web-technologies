<?php
     
     require_once('../model/usersModel.php');


?>



<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	<center>	
		<a href="home.php">Back </a> |
		<a href="logout.php">logout </a> 
	</center>
	<br>
	<table border="2" align="center">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>
		<?php
            
            $result =getAllUsers();
		      while($user= mysqli_fetch_assoc($result))
            { $count =0; ?>
                
             <tr>
				<td><?=$user['id']?></td>
				<td><?=$user['username']?></td>
				<td><?=$user['password']?></td>
				<td><?=$user['email']?></td>
				<td>
				<a href="edit.php?edit=<?=$user['id'] ?>"> EDIT</a> |
				<a href="delete.php?delete=<?=$user['id']?>"> DELETE</a>
				</td>
			 </tr>

         <?php
            }
		?>
	</table>
</body>
</html>