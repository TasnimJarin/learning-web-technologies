<?php 

    require('header.php');
	require('../../model/Admin/usersModel.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body style="background-color: lightcyan;">

	<center>
		<h2><u>Search</u></h2>
	Enter Name:
	<input type="text" id="name" name="name" placeholder="Enter User Name" value="" onkeyup="ajax()" />
	<div id="d2">
     </div>
	 
	 <br/>
	 <h2>Teacher Student Parent Admin Information</h2>
	 </center>
	<script type="text/javascript" src="script1.js"></script>
	<table border="1" align="center">
		<tr>
			<th>No</th>
			<th>NAME</th>
			<th>ID</th>
			<th>EMAIL</th>
            <th>Gender</th>
            <th>Date Of Birth</th>
            <th>Address</th>
            <th>Password</th>
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
	<center>	
	<h2><a href="home.php">Back </a> </h2>
	</center>
</body>
</html>