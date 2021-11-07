<?php

  session_start();
  require_once('../model/usersModel.php');

    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        if($username !='')
        {
            if($password !='')
            {
                $status= validate($username,$password);


               if($status)
               {
                   setcookie('flag','true',time()+3600,'/');
                   header('location:../views/home.php');
               }
               else
               {
                echo"<h1>Invalid Password/UserName!!</h1>"; 
               }



            }
            else
            {
                 echo"<h1>Invalid Password!!</h1>";
            }
        }
        else
        {
                    echo"<h1>Invalid UserName!!</h1>";
        }
    }

?>