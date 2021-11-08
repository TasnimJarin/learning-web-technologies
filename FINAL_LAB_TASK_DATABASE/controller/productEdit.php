<?php

session_start();
require_once('../model/usersModel.php');
    
    $name=$_REQUEST['name'];
    $buying=$_REQUEST['buying'];
    $selling=$_REQUEST['selling'];
    $id=$_REQUEST['id'];


    $user= ['id'=>$id , 'name'=>$name ,'buying'=>$buying ,'selling'=>$selling];

    $status=editProduct($user);

    if($status)
    {
       header('location:../views/display.php');
    }
    else
    {
        header('location:../views/edit.php?id='.$id);
    }


?>