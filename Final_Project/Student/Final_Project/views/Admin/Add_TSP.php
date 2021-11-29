<?php
 require_once('../../model/Admin/usersModel.php');
	session_start();

	if(isset($_POST['submit']))
    {

        $username=$_POST['username'];
        $userid=$_POST['id'];
        $email=$_POST["email" ];
        $date=$_POST['date'];
        $gender=$_POST['gender'];
        $ad=$_POST['add'];
        $password=$_POST['password' ];
        $file=$_POST['file'];
        $usertype=$_POST['usertype'];

		if($_POST['username'] != "")
        {
			if($_POST['id'] != "")
            {
                if($_POST["email" ] != "")
                {
				    if($_POST["date" ] != "")
                    {
                         if($_POST["gender"] != "")
                        {
                            if($_POST['add']!= "")
                            {
                                if($_POST['password']!= "")
                                {
                                         if($_POST['file'] != "")
                                         {
                                             if($_POST['usertype'] != "")
                                             {
                               
                                             // $myfileAdd = fopen('../../model/Admin/Addstp.txt', 'a');
                                             // $useradd = $_POST['username']."|".$_POST['id']."|".$_POST["email" ]."|".$_POST["gender" ]."|".$_POST["date" ]."|".$_POST['password' ]."|".$_POST['add' ]."|".$_POST['file' ]."|".$_POST['type' ]."\r\n";

                                             //    fwrite($myfileAdd, $useradd);
                                             //    fclose($myfileAdd);

                                             $user =[
                                                'username'=>$username,
                                                'userid'=>$userid,
                                                'email'=>$email,
                                                'date'=>$date,
                                                'gender'=>$gender,
                                                'ad'=>$ad,
                                                'password'=>$password,
                                                'file'=>$file,
                                                'usertype'=>$usertype
                                                    
    
                                             ];
 
                                             $status= addUser($user);
                                            

                                              if($status)
                                              {
                                               header('location: showListTSP.php');
                                              }
                                              else
                                              {
                                               echo "Try Again";
                                              }

                                            }
                                             else
                                             {
                                                 echo"Invalid User Type";
                                             }
                                         }
                                         else
                                         {
                                             echo "Invalid picture!!";
                                         }

                        

                               }
                               else
                               {
                                echo "Invalid Password....."; 
                               }
                           }
                          else
                            {
                              echo "Invalid Address.....";
                            }
                        }
                         else
                        {
                             echo "Invalid Gender....";
                        }
                    }
                    else
                    {
					   echo "Invalid Date of Birth.....";
				    }

					
				}
                else
                {
					echo "Invalid  Email.....";
				}	
			}
            else
            {
				echo "Invalid Id...";
			}
		}
        else
        {
			echo "Invalid Username.....";
		}
	}
?>







<!DOCTYPE html>
<html>
<head>
	<title>Add Teacher Student Parents PAGE</title>
</head>
<body>

	<form method="post">
		
		  <table border="1" align="center" width="450px" height="450px">

                <tr>
                    <td>
                       <center><b>ADD Admin/Parent/Student/Teacher</b></center> 
			
			        <table>
				       <tr>
					      <td>Username:</td>
				          <td><input type="text" name="username" value=""></td>
				        </tr>
                        <tr>
                            <td>Id:</td>
                            <td><input type="text" name="id" value=""></td>
                          </tr>
				        <tr>
					        <td>Email:</td>
					        <td><input type="email" name="email" value=""></td>
				        </tr>
                        <tr>
					        <td>Date of Birth:</td>
					        <td><input type="date" name="date" value="date"></td><hr/>
				        </tr>
                        <tr>
					        <td>Gender:</td>
					        <td>
                                <input type="radio" name="gender" value="Male">Male
                                <input type="radio" name="gender" value="Female">Female
                                <input type="radio" name="gender" value="Other">Other
                            </td>
				        </tr>
                        </tr>
                        <tr>
                           <td>Address:</td>
                           <td><input type="text" name="add" value=""></td>
                       </tr>
                       <tr>
                        <tr>
					        <td>Password:</td>
					        <td><input type="password" name="password" value=""></td>
				        </tr>
                        <tr>
					        <td>Picture:</td>
					        <td><input type="file" name="file" value=""></td>
				        </tr>
                        
                        <tr>
                           <td>User Type:</td>
                           <td>    <input type="radio" name="usertype" value="Admin"><b>Admin</b>
                                <input type="radio" name="usertype" value="Teacher"><b>Teacher</b>
								<input type="radio" name="usertype" value="Student"><b>Student</b>
                                <input type="radio" name="usertype" value="Parent"><b>Parent</b><br/></td>
							  
                        </tr>
                        
				        <tr>
					        <td colspan="2"><hr/></td>
					        
				        </tr>
                        <tr>
					        <td colspan="2"><input type="submit" name="submit" value="ADD">
                                <a href="Home.php">BACK</a>
                            </td>
					        
				        </tr>
			         </table>
                    </td>
                </tr>
            </table>

	</form>
</body>
</html>
