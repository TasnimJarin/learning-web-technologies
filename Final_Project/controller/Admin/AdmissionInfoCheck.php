<?php
    require('../../model/Admin/usersModel.php');
	session_start();
    

	if(isset($_POST['submit']))
    {
          $addnotice=$_POST["addnotice"];
          $adddate=$_POST["adddate" ];


            if($addnotice != "")
            {
                if($adddate != "")
                {
                    // $myAdmissionfile = fopen('../../model/Admin/AdmissionInfo.txt', 'a');
                    // $ad= $_POST["addnotice"]."|".$_POST["adddate" ]."\r\n";

                    //        fwrite($myAdmissionfile, $ad);
                    //        fclose($myAdmissionfile);

                     $notice = [                       
                        'addnotice'=>$addnotice,
                        'adddate'=>$adddate
                        

                        ];

                        $status= addNotice($notice);


                        if($status)
                        {
                            header('location: ../../view/Admin/AdmissionInfoAdd.php');
                        }
                        else
                        {
                            echo "Try Again!!!";
                        }

                
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
