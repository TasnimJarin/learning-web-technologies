<html>
<head>
	<title>Create New User</title>
</head>
<body>
	<center>	
		<a href="home.php">Back </a> |
		<a href="logout.php">logout </a> 
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
					<td><input type="submit" name="submit" value="Change"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>