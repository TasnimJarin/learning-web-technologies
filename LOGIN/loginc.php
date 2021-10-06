<?php 

if(isset($_REQUEST['submit']))
{
	$name = $_REQUEST['name'];
	$password = $_REQUEST['password'];

	if($name !="")
	{
		if($password !="")
		{
				if($_SESSION['user']['name'] == $username && $_SESSION['user']['password'] == $password)
				{
					$_SESSION['flag'] = "true";
				          header('location: Home.html');
				}
				else
				{
                     echo "in";
				}
			
		}
		else
		{
			echo "Invalid password";
		}
		
	}
	else
	{
		echo "Invalid username";
	}	
}
 

?>




