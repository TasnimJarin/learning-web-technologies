<?php 

    require('header.php');
    require('../../model/Admin/usersModel.php');


?>
<html>
      <head>
          <title>Student CGPA</title>
          <link rel="stylesheet" type="text/css" href="../../controller/Admin/TSP.css">
     </head>
    <body>
    <div id="d1">
                  <img src="../../assets/Admin/newwb_back.jpg" class="c1"  >
    <form method="POST"  >
        <div id="dcg1">
                    <div id="dcg2">
                            <center><u><h2>Student CGPA<h2></u></center>
                            <center><h4><a href="Home.php">Back</a><h4></center>
                    </div>
                <table border="1" width="200%" >
                    
                    <tr>
                        <th>Student ID</th>
                        <th>Student CGPA</th>
                        <th></th>
                        
                    </tr>
                   

                    <?php

                    $result=getStudentSchedule();
                    while($user= mysqli_fetch_assoc($result))
                 {  ?>
		
					    <tr>
						    <td><center><?=$user['sid']?></center></td>
                            <td><center><?=$user['cgpa']?></center></td>
                            <td><a href="studentCGPA_Edit.php?edit=<?=$user['id'] ?>">EDIT</a>
						    
					     </tr>
		 <?php
            }
		?>
           


                    
                </table>
       

</form>
</div>
   </body>

</html>