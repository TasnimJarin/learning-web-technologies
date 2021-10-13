<?php
	session_start();

	if(isset($_POST['submit']))
    {
		if($_POST['name'] != "")
        {
			if($_POST['email'] != "")
			{
				if($_POST['username'] != "")
				{    

					if($_POST['password'] != "")
				        {
							if(($_POST['Cpassword'] != "" )&& ($_POST['Cpassword'] ==$_POST['password']))
				                {
									if($_POST['gender']!= "")
									{
										if($_POST['DOB1']!= "" && $_POST['DOB2']!= ""&& $_POST['DOB3']!= "")
                                        {
					                      setcookie('username', $_POST['username'], time()+3600, '/');
					                      setcookie('password', $_POST['password'], time()+3600, '/');
					                      setcookie('email', $_POST['email'], time()+3600, '/');
										  setcookie('gender', $_POST['gender'], time()+3600, '/');
										  setcookie('DOB1', $_POST['DOB1'], time()+3600, '/');
										  setcookie('DOB2', $_POST['DOB2'], time()+3600, '/');
										  setcookie('DOB3', $_POST['DOB3'], time()+3600, '/');
								

				                        	header('location: login.html');

									    }						
									    else
									    {
									     echo "Invalid DOB!";
									    }
									}
									else
									{     
									 	echo "Invalid gender!";
									}

								}
							else
							{
								echo "Invalid .......Conform password";
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
			else
			{
				echo "Invalid email...";
			}

		
		}
	    else
		{
			echo "Invalid name...";
		}
	}


				
	
?>