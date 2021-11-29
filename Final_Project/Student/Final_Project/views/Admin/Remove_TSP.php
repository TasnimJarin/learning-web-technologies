<?php
	require('../../model/Admin/usersModel.php');
    
    $id= $_REQUEST['delete'];
   $user = getUserById($id);

   if(isset($_GET['delete']))
   {
       $result=deleteUser($id);

       if($result)
       {
        header('location:showListTSP.php');
       }
       else
       {
          echo "error";
       }
   }
    




?>