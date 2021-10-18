<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>



<!DOCTYPE html>
<html>
<head>
	<title>User Home Page</title>
</head>
<body>
     <form method="post" >
		<fieldset>
            <center>
                <h1>WELCOME  <?php echo $_COOKIE['loggedInName'] ?>! </h1><br/>
                <a href="profile.php">Profile</a><br/>
                <a href="changepass.php">Change Password</a><br/>
                <a href="logout.php">Logout</a><br/>






            </center>





       </fieldset>
	</form>
</body>
</html>


<?php 
     } else {
        header('location: login.html');
    }

?>