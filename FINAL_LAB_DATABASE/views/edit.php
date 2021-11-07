<?php
	session_start();
    require_once('../model/usersModel.php');

    $id=$_GET['edit'];

	if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $type='user';
    
		if($username != ""){
			if($password != ""){
				if($email != ""){

                    
                    $user =[
                        'username'=> $username,
                        'password'=>$password,
                        'email'=>$email,
                        'type'=>'user',
                        'id'=>$id
                       ]; 
                       $result=editUser($user);

                      if($result)
                      {
                        header('location:userlist.php');
                      }
                      else
                      {
                          die(mysqli_error($con));
                          //echo"Try Again........";
                      }
				}else{
					echo "Invalid email...";
				}	
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>




<html>
<head>
	<title>Create New User</title>
</head>

<body>
	<center>	
		<a href="userlist.php">Back </a> |
		<a href="logout.php">Logout </a> 
	</center>
	<form method="post">
		<fieldset>
			<legend>Create New</legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>email:</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Edit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>