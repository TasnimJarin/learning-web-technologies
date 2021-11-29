<?php 

    require('header.php');
                        $server = "localhost" ;
                        $username ="root";
                        $password = "";
                        $dbname ="project";

                        $con = mysqli_connect($server, $username, $password, $dbname);
	

	$id= $_REQUEST['edit'];

    $sql="select * from sschedule where id={$id}";
    $result=mysqli_query($con, $sql);
    $user= mysqli_fetch_assoc($result);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit CGPA PAGE</title>
</head>
<body>

	<form method="post" action="../../controller/Admin/StudentCGPAcontrol.php">
            <center>
                <u><b>Edit Student CGPA<b></u>
                <table border='1' >
                       <tr>
					      <td>ID:</td>
				          <td><?=$user['sid']?></td>
				      </tr>

				       <tr>
					      <td>CGPA:</td>
				          <td><input type="text" name="cgpa" value="<?=$user['cgpa']?>"></td>
				      </tr>
                      <tr>
                            <td><a href="StudentCGPA.php">BACK</a></td>
							<td><input type="submit" name="submit" value="Edit">
                                <input type="hidden"name="id" value="<?=$user['id']?>"></td>
					        
				        </tr>
                        
			   </table>
            </center>

    </form>
</body>
</html>



    