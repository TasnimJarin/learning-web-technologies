<?php 

    require('header.php');
	require('../../model/Admin/usersModel.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	<center>	
		<a href="home.php">Back </a> |
		<a href="../../controller/Admin/logout.php">logout </a> 
	</center>
	<br>
	<table border="1" align="center">
		<tr>
			<th>No</th>
			<th>NAME</th>
			<th>ID</th>
			<th>EMAIL</th>
            <th>Gender</th>
            <th>Date Of Birth</th>
            <th>Password</th>
            <th>Address</th>
            <th>User Type</th>
			<th>  </th>
			
		</tr>
		<?php
		    //  $myfileAdd = fopen('../model/Addstp.txt','r');
		    // $count =0;
			
			// while (!feof( $myfileAdd)) {
			// 	$data = fgets($myfileAdd);
			// 	if($data!="")
			// 	{
			// 		$useradd = explode('|', $data);

			$result =getAllUsers();
		      while($user= mysqli_fetch_assoc($result))
            {  ?>
		
					    <tr>
						    <td><?=$user['id']?></td>
						    <td><?=$user['username']?></td>
						    <td><?=$user['userid']?></td>
						    <td><?=$user['email']?></td>
                            <td><?=$user['gender']?></td>
                            <td><?=$user['date']?></td>
                            <td><?=$user['ad']?></td>
                            <td><?=$user['password']?></td>
                            <td><?=$user['usertype']?></td>
							<td><a href="Edit_TSP.php?edit=<?=$user['id'] ?>">EDIT</a>||
							<a href="Remove_TSP.php?delete=<?=$user['id']?>">REMOVE</a></td>
						    
						    </td>
					     </tr>
		 <?php
            }
		?>
	</table>
</body>
</html>