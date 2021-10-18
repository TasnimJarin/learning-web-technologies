<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>



<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
</head>
<body>

	<form method="post" >
		
			<table border='1'align="center" >
                <tr>
                    <td colspan="2" align="center"><h3>Profile</h3></td>
                    
                </tr>
                <tr>
                    <td>ID</td>
                    <td><?php echo $_COOKIE['loggedInId'] ?></td>
                </tr>
                <tr>
                    <td>NAME</td>
                    <td><?php echo $_COOKIE['loggedInName'] ?></td>
                </tr>
                <tr>
                    <td>User Type</td>
                    <td><?php echo $_COOKIE['loggedInUserType'] ?></td>
                </tr>

                <tr>
                    <td colspan="2" align="right"><a href="">Go Home</a></td>
                </tr>

            </table>
                      



	</form>
</body>
</html>


<?php 
     } else {
        header('location: login.html');
    }

?>