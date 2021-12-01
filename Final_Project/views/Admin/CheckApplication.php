<?php 

    require_once('header.php');

    $server = "localhost" ;
    $username ="root";
    $password = "";
    $dbname ="project";

    $con = mysqli_connect($server, $username, $password, $dbname);

    $sql ="select * from products where type ='Admin' ";
            $result=mysqli_query($con, $sql);



?>


<html>
    <head></head>
    <body>
            <form method="POST" >
                    <fieldset>
                        <center>
                        <h2><u>Application</u></h2>
                
                <table border='1'> 
                     
                    <?php
                    
                    while($user= mysqli_fetch_assoc($result))
                 {  ?>
		
					    <tr>
						    <td><?=$user['value']?></td>
						    
					     </tr>
		 <?php
            }
		?>


                      </center>

                </table>
                
                     <center><h4><a href="Home.php">BACK</a><h4></center>
                    </fieldset>

        </form>
    </body>
</htmlupload/>