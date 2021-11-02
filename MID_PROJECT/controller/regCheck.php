<?php
	session_start();

	if(isset($_POST['submit']))
    {
		if($_POST['username'] != "" && str_word_count($_POST['username'])>=2)
        {
			if($_POST['id'] != "" && ($_POST['id']>=0 && $_POST['id']<=9 || $_POST['id']== '-'))
            {
                if($_POST["email" ] != "")
                {
				    if($_POST["date" ] != "")
                    {
                         if(isset($_POST['gender']))
                        {
                            if($_POST['add']!= "" && strlen($_POST['add']>2))
                            {
                                if($_POST['password']!= "")
                                {
                                    if($_POST['confirmpassword'] != "" &&  $_POST['password']==$_POST['confirmpassword'])
                                   {
                                         if($_POST['file'] != "")
                                         {
                               
                                           $myfile = fopen('../model/user.txt', 'a');
                                           $user = $_POST['username']."|".$_POST['id']."|".$_POST["email" ]."|".$_POST["gender" ]."|".$_POST["date" ]."|".$_POST['password' ]."|".$_POST['add' ]."|".$_POST['file' ]."|".";"."\r\n";

                                               fwrite($myfile, $user);
                                               fclose($myfile);

                                                  header('location: ../views/Login.html');
                                         }
                                         else
                                         {
                                             echo "<h1>Invalid picture!!</h1>";
                                         }

                                   }
                                   else
                                   {
                                       echo "<h1>Invalid Confirm Password!!!</h1>";
                                   }
                               }
                               else
                               {
                                echo "<h1>Invalid Password!!!</h1>"; 
                               }
                           }
                          else
                            {
                              echo "<h1>Invalid Address...</h1>";
                            }
                        }
                         else
                        {
                             echo "<h1>Invalid Gender...</h1>";
                        }
                    }
                    else
                    {
					   echo "<h1>Invalid Date of Birth...</h1>";
				    }

					
				}
                else
                {
					echo "<h1>Invalid  Email!!</h1>";
				}	
			}
            else
            {
				echo "<h1>Invalid Id!!</h1>";
			}
		}
        else
        {
			echo " <h1>Invalid Username!!</h1>";
		}
	}
?>








