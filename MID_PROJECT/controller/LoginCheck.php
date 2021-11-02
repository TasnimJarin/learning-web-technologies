<?php
	session_start();

	if(isset($_POST['submit']))
    {
		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id != "")
		{
			if($password != "")
			{
				$myfile = fopen('../model/user.txt', 'r');

				while (!feof($myfile)) 
				{
					$data = fgets($myfile);
					$user = explode('|', $data);

					if(trim($user[1]) == $id && trim($user[5]) == $password)
					{
						setcookie('flag', 'true', time()+3600, '/');

						setcookie('loggedInId',$id,time()+3600,'/');
                        setcookie('loggedInName',$user[0],time()+3600,'/');
                        setcookie('loggedEmail',$user[2],time()+3600,'/');
                        setcookie('loggedgender',$user[3],time()+3600,'/');
                        setcookie('loggedDate',$user[4],time()+3600,'/');
						setcookie('loggedadd',$user[6],time()+3600,'/');
                        setcookie('loggedpic',$user[7],time()+3600,'/');
						

						header('location:../views/Home.php');
					}
					else
					{
						echo"Invalid password/id";
					}
                  
				}

				

			}
			else
			{
				echo "<h1>Invalid password...</h1>";
			}
		}
		else
		{
			echo "<h1>Invalid id...</h1>";
		}
	}
?>