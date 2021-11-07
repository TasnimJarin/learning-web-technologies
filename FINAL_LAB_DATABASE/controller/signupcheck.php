<?php
session_start();
require_once('../model/usersModel.php');

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
        $email=$_POST['email'];
 
        if($username!='')
        {
            if($password!='')
            {
                if($email!='')
                {
                        $user =[
                               'username'=> $username,
                               'password'=>$password,
                               'email'=>$email,
                               'type'=>'user'
                              ];

                        $status= addUser($user);

                     if($status)
                     {
                         header('location:../views/Login.html');
                     }
                     else
                     {
                         echo"Try Again";
                     }
                }
                else
                {
                    echo"<h1>Invalid Email!!</h1>";
                }
            }
            else
            {
                 echo"<h1>Invalid Password!!</h1>";
            }
        }
        else
        {
                    echo"<h1>Invalid Name!!</h1>";
        }
    }

?>