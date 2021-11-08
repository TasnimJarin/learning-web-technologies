<?php
    session_start();
    require_once('../model/usersModel.php');

    
    $id= $_REQUEST['delete'];
   $user = getProductById($id);

    if(isset($_GET['delete']))
    {
        $id=$_GET['delete'];
        //print_r($id);

        $result=deleteProduct($id);

        if($result)
        {

            header('location:display.php');
        }
        else
        {
            echo"error";
        }
        
    }

?>