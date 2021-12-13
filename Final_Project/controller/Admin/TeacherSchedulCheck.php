<?php
require_once('../../model/Admin/usersModel.php');
	session_start();


	// if(isset($_REQUEST['submit1']))
  //   {
  //       // $id=$_POST["id"];
        // $Saturday=$_POST["Saturday"];
        // $Sunday=$_POST["Sunday"];
        // $Monday=$_POST["Monday"];
        // $Tuesday=$_POST["Tuesday"];
        // $Wednesday=$_POST["Wednesday"];
        // $Thursday=$_POST["Thursday"];

        $json = $_REQUEST['data'];
        $json = json_decode($json);
        
        $id=$json->id;
        $Saturday=$json->Saturday;
        $Sunday=$json->Sunday;
        $Monday=$json->Monday;
        $Tuesday=$json->Tuesday;
        $Wednesday=$json->Wednesday;
        $Thursday=$json->Thursday;

 

                          $ts = [
                          'id'=>$id,
                          'Saturday'=>$Saturday,
                          'Sunday'=>$Sunday,
                          'Monday'=>$Monday,
                          'Tuesday'=>$Tuesday,
                          'Wednesday'=>$Wednesday,
                          'Thursday'=>$Thursday
 
                          ];

                          $status= addTeacherSchedule($ts);


                          if($status)
                          {
                            // header('location: ../../view/Admin/TeacherSchedule.php');
                            echo "success";
                          }
                          else
                          {
                              echo "Try Again!!!";
                          }
    
   
       

    // }
            

?>
