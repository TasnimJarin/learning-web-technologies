<?php
	session_start();

	if(isset($_POST['submit']))
    {
        $id=$_POST["sid"];
        $Saturday=$_POST["Saturday"];
        $Sunday=$_POST["Sunday"];
        $Monday=$_POST["Monday"];
        $Tuesday=$_POST["Tuesday"];
        $Wednesday=$_POST["Wednesday"];
        $Thursday=$_POST["Thursday"];
          
  
                        
        $server = "localhost" ;
        $username ="root";
        $password = "";
        $dbname ="project";

        $con = mysqli_connect($server, $username, $password, $dbname);
        $sql ="insert into sschedule values('','{$Saturday}','{$Sunday}','{$Monday}','{$Tuesday}','{$Wednesday}','{$Thursday}','{$id}','3.79')";

        

          if(mysqli_query($con,$sql))
          {
            header('location: ../../views/Admin/studentSchedule.php');
          }
          else
          {
              echo "Error";
          }
                
    
   
 
    }
            

?>
