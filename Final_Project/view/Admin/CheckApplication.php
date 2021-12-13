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
                    
            <div id="d1" width: 100px;> 
                        <h1 style="font-size:3vw"><u>Application</u></h1>
                       
             <div id="d2">   
                <table border='1' > 
                     
                    <?php

                    $result =getAdminApplication();
                    
                    while($user= mysqli_fetch_assoc($result))
                 {  ?>
		
					    <tr>
						    <td><h3><?=$user['value']?></h3></td>
						    
					     </tr>
		 <?php
            }
		?>


                </table>
        
                
                <div id="d3">   <h2><a href="Home.php">BACK</a><h2></div>   
                     </div>
        </div>      

        </form>
    </body>
</htmlupload/>