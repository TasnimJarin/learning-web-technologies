<?php 

    require('header.php');
    require('../../model/Admin/usersModel.php');

?>



<html>
    <head></head>
    <link rel="stylesheet" type="text/css" href="../../controller/Admin/notice.css">
    <body>
    
                  <img src="../../assets/Admin/newwb_back.jpg" class="c1"  >
            <form method="POST" >
                    <fieldset>
                    <div id="d1">
                        <center>
                        <h2><u>ADMISSION</u><h2>
                        <h4><a href="Home.php">Back</a>|||<a href="AdmissionInfoAdd.php">Add AdmissionInfo </a><h4>
                     
                <table border='2'> 
                    <tr>   
                        <td colspan="2">Admission Schedule for SPRING 2021 - 2022 (Slot-1)</td>

                    </tr> 
                   
                    <?php
                                // $myAdmissionfile= fopen('../../model/Admin/AdmissionInfo.txt', 'r');
                                // if($myAdmissionfile=='')
                                // {
                                //                echo' <tr>
                                //                     <td></td>
                                //                     <td></td>
                                //                 </tr>';                               
                                      
                                // }
                                // else
                                // {
                                   
                                // while (!feof($myAdmissionfile)) {
                                //     $data = fgets($myAdmissionfile);
                                //     if ($data != "") {
                                //         $ad = explode('|', $data);
                                //             echo '
                                //                 <tr>
                                //                     <td>' . trim($ad[0]) . '</td>
                                //                     <td>' . trim($ad[1]) . '</td>
                                                   
                                //                 </tr>';
                                        
                                //     }



                                
                                //       }
                                // }

                                $result =getNotice();
                    
                               while($user= mysqli_fetch_assoc($result))
                              {  ?>

                              <tr>						   
                                <td><h4><?=$user['addnotice']?></td>
                                <td><?=$user['adddate']?></h4></td>
                                
						    
					        </tr>
	                 	 <?php
                           }

                         ?>


                       </center>

                </table>

                    </fieldset>

        </form>
      </div>
    </body>
</htmlupload/>