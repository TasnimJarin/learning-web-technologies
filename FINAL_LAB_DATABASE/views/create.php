<?php
	session_start();
    require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

		if($username != ""){
			if($password != ""){
				if($email != ""){

					  $user =[
                               'username'=> $username,
                               'password'=>$password,
                               'email'=>$email,
                               'type'=>'user'
                              ];

                        $status= addUser($user);

                      if($status)
                      {
                          header('location:userlist.php');
                      }
                      else
                      {
                          echo"Try Again........";
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
		<a href="home.php">Back </a> |
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
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>