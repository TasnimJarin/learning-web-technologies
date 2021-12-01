<?php
   session_start();
   
   require_once('../../model/Admin/usersModel.php');

    $username=$_REQUEST['username'];
    $userid=$_REQUEST['userid'];
    $email=$_REQUEST["email" ];
    $date=$_REQUEST['date'];
    $gender=$_REQUEST['gender'];
    $ad=$_REQUEST['ad'];
    $password=$_REQUEST['password' ];
    $file=$_REQUEST['file'];
    $usertype=$_REQUEST['usertype'];
    $id=$_REQUEST['id'];

         $user= ['id'=>$id , 'username'=>$username  ,'userid'=>$userid,'email'=>$email ,'date'=>$date, 'gender'=>$gender,'ad'=>$ad ,'password'=>$password,
                       'file'=>$file,'usertype'=>$usertype ];


                       $status=editUser($user);

                       if($status)
                       {
                          header('location:../../views/Admin/showListTSP.php');
                       }
                       else
                       {
                           header('location:../../views/Admin/edit.php?id='.$id);
                       }            








?>