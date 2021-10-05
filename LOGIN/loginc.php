<?php 

if(isset($_REQUEST['submit']))
{
	$name = $_REQUEST['name'];
	$password = $_REQUEST['password'];

	if($name !="")
	{
		if($password !="")
		{
             if($name==$password)
			 {
				header('location: Home.html');
			 }
			 else
			 {
				 echo "Invalid username/password";
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




