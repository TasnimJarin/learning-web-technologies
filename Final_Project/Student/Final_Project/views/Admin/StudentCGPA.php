<?php 

    require_once('header.php');
    $server = "localhost" ;
    $username ="root";
    $password = "";
    $dbname ="project";

    $con = mysqli_connect($server, $username, $password, $dbname);

    $sql ="select * from sschedule  ";
    $result=mysqli_query($con, $sql);

?>
<html>
      <head>
          <title>Student CGPA</title>
     </head>
    <body>
    <form method="POST"  >
                            <center><u><h2>Student CGPA<h2></u></center>
                            <center><h4><a href="Home.php">Back</a><h4></center>
                <table border="1" width="100%">
                    
                    <tr>
                        <th>Student ID</th>
                        <th>Student CGPA</th>
                        <th></th>
                        
                    </tr>
                   

                    <?php
                    
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
   </body>

</html>