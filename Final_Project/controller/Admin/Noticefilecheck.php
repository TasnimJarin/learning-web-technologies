<?php
  session_start();

     $des ="../../assets/Admin/upload/". $_FILES['myfile']['name'];
     $src=$_FILES['myfile']["tmp_name"];

     if(move_uploaded_file($src,$des))
     {
          
          $_SESSION['profile']=$_FILES['myfile']['name'];
          header('location:../../view/Admin/Notice.php');
     }


   


?>