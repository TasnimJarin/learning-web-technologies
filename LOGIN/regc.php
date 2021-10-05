<?php 

if(isset($_REQUEST['submit']))
{
	$name = $_REQUEST['name'];
    $email=$_REQUEST['email'];
    $passwor=$_REQUEST['password'];
 
	if($name !="")
    {
		if($email !="")
        {
            if($passwor !="")
            {
                if($name==$passwor )
                {
                    header('location: Login.html');
                }
                else
                {
                    echo "Invalid...";
                }
            }
            else
            {
                 echo "Invalid password..";
            }
        }
        else
        {
         echo "Invalid email..";
        }
	}
    else
    {
		echo "Invalid name";
	}	
}


?>