<?php
	session_start();

	if(isset($_REQUEST['submit1']))
    {
        $id=$_POST["id"];
        $Saturday=$_POST["Saturday"];
        $Sunday=$_POST["Sunday"];
        $Monday=$_POST["Monday"];
        $Tuesday=$_POST["Tuesday"];
        $Wednesday=$_POST["Wednesday"];
        $Thursday=$_POST["Thursday"];
          
      
                        // $myTSfile = fopen('../../model/Admin/addTeacherSchedul.txt', 'a');
                        // $addTS = $_POST['stime']."|".$_POST['etime']."|".$_POST["id" ]."|".$_POST["subject" ]."\r\n";
    
                        //        fwrite($myTSfile, $addTS );
                        //        fclose($myTSfile);
                        //        header('location: ../../views/Admin/TeacherSchedule.php');

                        $server = "localhost" ;
                        $username ="root";
                        $password = "";
                        $dbname ="project";

                        $con = mysqli_connect($server, $username, $password, $dbname);
                        $sql ="insert into tschedule values('{$id}','{$Saturday}','{$Sunday}','{$Monday}','{$Tuesday}','{$Wednesday}','{$Thursday}')";

                        

                          if(mysqli_query($con,$sql))
                          {
                            header('location: ../../views/Admin/TeacherSchedule.php');
                          }
                          else
                          {
                              echo "Error";
                          }
    
   
       

    }
            

?>
