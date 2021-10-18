<?php
	session_start();

	if(isset($_POST['submit']))
    {

		if($_POST['id'] != "")
        {
			if($_POST['password'] != "")
            {
				if($_POST['comfirmpassword'] != "" && $_POST['password']==$_POST['comfirmpassword'])
                {
                    if($_POST["username" ] != "")
                    {
                       if($_POST["users" ] != "")
                       {
                               
                             $myfile = fopen('user.txt', 'a');
                             $user = $_POST['id']."|".$_POST['password']."|".$_POST["username" ].$_POST["users" ]."\r\n";

                            fwrite($myfile, $user);
                            fclose($myfile);

                            header('location: login.html');
                       }
                       else
                       {
                        echo "Invalid user..";
                       }
                    }
                    else
                    {
                        echo "Invalid username...";
                    }

					
				}
                else
                {
					echo "Invalid confirm password...";
				}	
			}
            else
            {
				echo "Invalid password...";
			}
		}
        else
        {
			echo "Invalid id...";
		}
	}
?>


