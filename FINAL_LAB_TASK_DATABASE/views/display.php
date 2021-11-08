<?php
     
     require_once('../model/usersModel.php');


?>



<!DOCTYPE html>
<html>
<head>
	<title>DISPLAY</title>
</head>
<body>

<form method="post">
		<fieldset>
			<legend>DISPLAY</legend>
	<table border="2">
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
				<td><?=($user['selling']-$user['buying'])?></td>
				<td>
				<a href="edit.php?edit=<?=$user['id'] ?>"> EDIT</a> |
				<a href="delete.php?delete=<?=$user['id']?>"> DELETE</a>
				</td>
			 </tr>

         <?php
            }
		?>
	</table>
    </fieldset>
	</form>
</body>
</html>