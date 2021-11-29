<?php

 require_once('../../model/Student/usersModel.php');
     session_start();

	if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $userid=$_POST['text'];
    $email=$_POST["email" ];
    $date=$_POST['date'];
    $gender=$_POST['gender'];
    $ad=$_POST['address'];
    $password=$_POST['password' ];
    $file=$_POST['file'];
    $usertype=$_POST['usertype'];

		if($_POST['username'] !="" && str_word_count($_POST['username'])>=2){
				if($_POST['email'] !=""){
					if($_POST['gender'] !=""){
						if($_POST['date'] !=""){
								if($_POST['text'] !="" && ($_POST['text']>=0 && $_POST['text']<=9 || $_POST['text']== '-')){
									if($_POST['file'] !=""){
									  
									     	if($_POST['password'] != ""){
									     			if($_POST['address'] !=""){
                                                         if(isset($_POST['usertype']))
                                        {

                     $user = ['username'=> $_POST['text'], 'password'=> $_POST['password']];
				//	$_SESSION['user'] = $user;

                  // $myfile= fopen('../../model/Student/user.txt', 'w');
                  // $user=$_POST['username']."|".$_POST['email']."|".$_POST['gender']."|".$_POST['date'] ."|".$_POST['text'] ."|".$_POST['address'] ."|".$_POST['file']."|".$_POST['password'];
                  // fwrite($myfile, $user);
                  // fclose($myfile);
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
                                                header('location: ../../view/Student/Loginform.php');
                                           }
                                           else
                                           {
                                            echo "Try Again";
                                           }
					

				
				}else{
					echo "Invalid Address...";
				}
				}else{
			         echo "Null Password...";
		         }	
			   
	      	    }else{
			    echo "Choose a picture...";
	       	   }
	      	  }else{
			  echo "User ID invalid...";
	          	}
	           	}else{
			   echo "Invalid date...";
		         }
                 	}else{
	           		echo "Invalid gender...";
	             	}
	             	}else{
	           		echo "Null email...";
	        	}
	              }else{
	               		echo "Null Username...";
	               	}

	}
  }
?>