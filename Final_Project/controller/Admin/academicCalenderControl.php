<?php
    require('../../model/Admin/usersModel.php');
	session_start();

	if(isset($_POST['submit']))
    {
        $addm=$_POST["addm"];
        $adddate=$_POST["adddate"];
        $addnotice=$_POST["addnotice" ];
          
        if($addm != "")
        {
            if($adddate != "")
            {
                if($addnotice != "")
                {
                    // $myCalfile = fopen('../../model/calender.txt', 'a');
                    // $cal = $_POST['addm']."|".$_POST['adddate']."|".$_POST["addnotice" ]."\r\n";

                    //        fwrite($myCalfile, $cal);
                    //        fclose($myCalfile);

                      $ac = [                       
                        'addm'=>$addm,
                        'adddate'=>$adddate,
                        'addnotice'=>$addnotice
                        

                        ];

                        $status= addAcademicCalender($ac);


                        if($status)
                        {
                            header('location: ../../view/Admin/academicCalender.php');
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
        else
            {
                echo"Invalid month";
            }
    }
            

?>
