<?php
	session_start();

	if(isset($_POST['submit']))
    {
          $sub=$_POST['submit'];

            if($_POST["addnotice"] != "")
            {
                if($_POST["adddate" ] != "")
                {
                    $myAdmissionfile = fopen('../model/AdmissionInfo.txt', 'a');
                    $ad= $_POST["addnotice"]."|".$_POST["adddate" ]."\r\n";

                           fwrite($myAdmissionfile, $ad);
                           fclose($myAdmissionfile);

                           

                              header('location: ../views/AdmissionInfo.php');
                }
                else
                {
                     echo"Invalid notice";
                }
            }
            else
            {
                echo"Invalid Date";
            }
        

    }
            

?>
