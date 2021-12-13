<?php 

    require('header.php');
    require('../../model/Admin/usersModel.php');


	$id= $_REQUEST['edit'];


    $user=getStudentScheduleById($id);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit CGPA PAGE</title>
	<link rel="stylesheet" type="text/css" href="../../controller/Admin/TSP.css">
</head>
<body style="background-color: lightcyan;">
<div id="dcg">
                  


	<form method="post" action="../../controller/Admin/StudentCGPAcontrol.php">
		
            <center>
			<div id="dcg4">
                
                <table border='1'width="50%" >
                       <tr>
					      <td colspan="2"><h3><center>Edit Student CGPA</center></h3></td>
				          
				      </tr>
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
            </div>
            </center>

</div>

    </form>
</body>
</html>



    