<?php 

    require('header.php');
    require('../../model/Admin/usersModel.php');

?>

        <html>

            <head>
            <link rel="stylesheet" type="text/css" href="../../controller/Admin/notice.css">
            </head>
            <img src="../../assets/Admin/newwb_back.jpg" class="c1"  >
                    <body>
                    <div id="d4"> 
                            <center><h2>Academic Calender<h2></center>
                            <center><h4><a href="Home.php">Back</a>|||<a href="academicCalAdd.php">Add Academic Calender Info</a><h4></center>
                            <table border="1" align="center"  width="850px" >
                                <tr>
                                    <td colspan="3" align="center"><h4>Regular Students and Masters’ Freshman Class :<u> September 12, 2021</u></h4></td>

                                </tr>
                                <tr >
                                    <td colspan="3" align="center" >
                                            <table >
                                                <tr>
                                                    <td colspan="3"><b>2021</b></td>
                                                   
                                                </tr>
                                                
                                <?php
                                // $myCalfile= fopen('../../model/Admin/calender.txt', 'r');
                                // if($myCalfile=='')
                                // {
                                //                echo' <tr>
                                //                     <td></td>
                                //                     <td></td>
                                //                     <td></td>
                                //                 </tr>';                               
                                      
                                // }
                                // else
                                // {
                                   
                                // while (!feof($myCalfile)) {
                                //     $data = fgets($myCalfile);
                                //     if ($data != "") {
                                //         $cal = explode('|', $data);
                                //             echo '
                                //                 <tr>
                                //                     <td>' . trim($cal[0]) . '</td>
                                //                     <td>' . trim($cal[1]) . '</td>
                                //                     <td>' . trim($cal[2]) . '</td>
                                //                 </tr>';
                                        
                                //     }



                                
                                //       }
                                // }
                                $result =getAcademicCalender();
                    
                               while($user= mysqli_fetch_assoc($result))
                              {  ?>

                              <tr>						   
                                <td><h3><?=$user['addm']?></h3></td>
                                <td><h3><?=$user['adddate']?></h3></td>
                                <td><h3><?=$user['addnotice']?></h3></td>
                                
						    
					        </tr>
	                 	 <?php
                           }

		                ?>
                                

                                    </td>
                                </tr>
                        

                            </table>
        
                 </div>
             </body>

        </html>



