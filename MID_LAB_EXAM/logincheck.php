<?php
	session_start();

	if(isset($_POST['submit']))
    {
		$id = $_POST['id'];
		$password = $_POST['password'];
		$usertype= $_POST['users'];

		if($id != "")
		{
			if($password != "")
			{
				$myfile = fopen('user.txt', 'r');

				while (!feof($myfile)) 
				{
					$data = fgets($myfile);
					$user = explode('|', $data);
					if(trim($user[0]) == $id && trim($user[1]) == $password && trim($user[3])=="Admin" )
					{
						setcookie('flag', 'true', time()+3600, '/');

						setcookie('loggedInId',$id,time()+3600,'/');
                        setcookie('loggedInName',$user[2],time()+3600,'/');
                        setcookie('loggedInUserType',$user[3],time()+3600,'/');

						header('location: AdminHome.php');
					}
                    else if(trim($user[0]) == $id && trim($user[1]) == $password && trim($user[3]) =="User")
                    {
                        setcookie('flag', 'true', time()+3600, '/');

						setcookie('loggedInId',$id,time()+3600,'/');
                        setcookie('loggedInName',$user[2],time()+3600,'/');
                        setcookie('loggedInUserType',$user[3],time()+3600,'/');

						header('location: UserHome.php');
                    }
				}

				echo "invalid username/password";

			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>