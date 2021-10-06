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
                $user=['username'=>'name','password'=>'password'];
                $_SESSION['user']=$user;

                    header('location: Login.html');
                    
                
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