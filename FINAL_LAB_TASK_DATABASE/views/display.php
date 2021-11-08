<?php
     
     require_once('../model/usersModel.php');


?>



<!DOCTYPE html>
<html>
<head>
	<title>DISPLAY</title>
</head>
<body>

	<br>
	<table border="2" align="center">
		<tr>
			<th>NAME</th>
			<th>PROFIT</th>
			<th colspan="2"></th>
			
		</tr>
		<?php
            
            $result =getAllProduct();
		      while($user= mysqli_fetch_assoc($result))
            {  ?>
                
             <tr>
				<td><?=$user['name']?></td>
				<td><?=$user['buying']?></td>
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