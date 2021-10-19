<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>




<!DOCTYPE html>
<html>
<head>
	<title>LOGIN Page</title>
</head>
<body>

	<form method="post" action="changepasscheck.php">
		<fieldset>
			<legend><b>LOGIN</b></legend>
			
					Current Password<br/>
				
				    <input type="password" name="password" value=""><br/>
				
					New Password<br/>
				
					<input type="password" name="newpassword" value=""><br/>
                    Retype New Password<br/>
				
					<input type="password" name="Repassword" value=""><br/><hr/>

				
				

					<input type="submit" name="submit" value="change">
                    <a href="UserHome.php">Home</a>

		</fieldset>
	</form>
</body>
</html>


<?php 
     } else {
        header('location: login.html');
    }

?>