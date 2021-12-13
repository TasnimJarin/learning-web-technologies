<?php
	session_start();

	if(isset($_POST['submit']))
    {
		
		if($_POST['idE'] != "" )
		{
			// $myfile = fopen('../../model/Admin/user.txt', 'w');
            //      $user = $_POST['usernameE']."|".$_POST['idE']."|".$_POST["emailE" ]."|".$_POST["genderE" ]."|".$_POST["dateE" ]."|".$_POST['passwordE' ]."|".$_POST['addE' ]."|".$_POST['fileE' ]."|".";"."\r\n";

            //          fwrite($myfile, $user);
            //          fclose($myfile);

			require_once('../../model/Admin/usersModel.php');

			$username=$_REQUEST['usernameE'];
			$userid=$_REQUEST['idE'];
			$email=$_REQUEST["emailE" ];
			$date=$_REQUEST['dateE'];
			$gender=$_REQUEST['genderE'];
			$ad=$_REQUEST['addE'];
			$password=$_REQUEST['passwordE' ];
			$file=$_REQUEST['fileE'];
			$usertype=$_REQUEST['usertype'];
			$id=$_REQUEST['id'];
		
				 $user= ['id'=>$id , 'username'=>$username  ,'userid'=>$userid,'email'=>$email ,'date'=>$date, 'gender'=>$gender,'ad'=>$ad ,'password'=>$password,
							   'file'=>$file,'usertype'=>$usertype ];
		
		
							   $status=editUser($user);
		
							   if($status)
							   {
								header('location: ../../view/Admin/ShowPro.php');
							   }
							   else
							   {
								   echo "Error";
							   }            
					   


                  
				    

		}
	}
?>










