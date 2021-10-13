<?php
	session_start();

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
        $rem=$_POST['check'];

		if($username != ""){
			if($password != ""){
							
				if($_COOKIE['username'] == $username && $_COOKIE['password'] == $password)
                {
					if($rem!= "")
                    {
                        setcookie('username', $username, time()+3600, '/');
					    setcookie('password', $password, time()+3600, '/');
                        $_SESSION["username"] =$username;
                        $_SESSION["password"] =$password;
                        header('location: Dashboard.php');
					
                    }
                    else
                    {
                     setcookie("username","");
                     setcookie("password","");
                     setcookie('flag', 'true', time()+3600, '/');
                    header('location: Dashboard.php');
                    }
                   
				}
                else
                {
					echo "invalid username/password";
				}
			}
            else
            {
				echo "Invalid password...";
			}
		}
        else
        {
			echo "Invalid username...";
		}
	}
?>