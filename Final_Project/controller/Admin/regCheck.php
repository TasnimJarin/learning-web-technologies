<?php
 require_once('../../model/Admin/usersModel.php');

	session_start();

	if(isset($_POST['submit']))
    {
    $username=$_REQUEST['username'];
    $userid=$_REQUEST['id'];
    $email=$_REQUEST["email" ];
    $date=$_REQUEST['date'];
    $gender=$_REQUEST['gender'];
    $ad=$_REQUEST['add'];
    $password=$_REQUEST['password' ];
    $file=$_REQUEST['file'];
    $usertype=$_REQUEST['usertype'];
    
		if($_POST['username'] != "" )
        {
			if($_POST['id'] != "" )
            {
                // if($_POST["email" ] != "")
                // {
				//     if($_POST["date" ] != "")
                //     {
                //          if(isset($_POST['gender']))
                //         {
                //             if($_POST['add']!= "" )
                //             {
                //                 if($_POST['password']!= "")
                //                 {
                                   
                //                      if($_POST['file'] != "")
                //                     {
                //                         if(isset($_POST['usertype']))
                //                         {
                               
                                        //    $myfile = fopen('../model/user.txt', 'a');
                                        //    $user = $_POST['username']."|".$_POST['id']."|".$_POST["email" ]."|".$_POST["gender" ]."|".$_POST["date" ]."|".$_POST['password' ]."|".$_POST['add' ]."|".$_POST['file' ]."|".$_POST['usertype' ]."|".";"."\r\n";

                                        //        fwrite($myfile, $user);
                                        //        fclose($myfile);

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

                                        $status=addUser($user);

                                            if($status)
                                           {
                                            header('location: ../../view/Admin/Login.html');
                                           }
                                           else
                                           {
                                            echo "Try Again";
                                           }



                                        }
                                       
                                    }
                                    
        //                        }
                               
        //                    }
                         
        //                 }
                         
        //             }
                    

					
		// 		}
                
		// 	}
            
		// }
       
	}
?>








