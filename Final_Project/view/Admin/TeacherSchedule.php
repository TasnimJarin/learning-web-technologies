<?php 

    require('header.php');
    require('../../model/Admin/usersModel.php');

            
?>

<html>
    <head>
    <title>Teacher Schedule</title>
    <link rel="stylesheet" type="text/css" href="../../controller/Admin/TSP.css">
    </head>
    <body>
    <div id="d1">
                  <img src="../../assets/Admin/newwb_back.jpg" class="c1"  >
    <form method="POST" >
        
                     <div id ="d2">
                            <center><h2>Teacher Schedule<h2></center>
                            <center><h4><a href="Home.php">Back</a>|||<a href="TeacherSchedulAdd.html">Add Teacher Schedule</a><h4></center>
                            
                <table border="1" width="100%">
                    
                    <tr>
                        <th><h3>TEACHER ID</th>
                        <th>CLASS TIME and SUBJECT (Saturday)</th>
                        <th>CLASS TIME and SUBJECT (Sunday)</th>
                        <th>CLASS TIME and SUBJECT (Monday)</th>
                        <th>CLASS TIME and SUBJECT (Tuesday)</th>
                        <th>CLASS TIME and SUBJECT (Wednesday)</th>
                        <th>CLASS TIME and SUBJECT (Thursday)</h3></th>
                        
                    </tr>
                    <tr>
                        <td><h3>40-33221-1</td>
                        <td>(8-10)RM,(12-2)RM</td>
                        <td></td>
                        <td>(8-10)RM,(12-2)RM</td>
                        <td></td>
                        <td></td>
                        <td>(11-1)RM</h3></td>
                    </tr>
                    
                    <?php
                    $result =getTeacherSchedule();
                    
                    while($user= mysqli_fetch_assoc($result))
                 {  ?>
		
					    <tr>
						    <td><h3><?=$user['id']?></h3></td>
                            <td><?=$user['Saturday']?></td>
                            <td><?=$user['Sunday']?></td>
                            <td><?=$user['Monday']?></td>
                            <td><?=$user['Tuesday']?></td>
                            <td><?=$user['Wednesday']?></td>
                            <td><?=$user['Thursday']?></h3></td>
						    
					     </tr>
		 <?php
            }
		?>
                    
                       
                    
                </table>
                
                
                   
</form>

        </div>
        </div>
   </body>

</html>