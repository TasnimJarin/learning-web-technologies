<?php 

    require('header.php');
	require('../../model/Admin/usersModel.php');

	$id= $_REQUEST['edit'];

   $user = getUserById($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Teacher Student Parents PAGE</title>
</head>
<body>

	<form method="post" action="../../controller/Admin/Edit_TSPcheck.php">
		
		  <table border="1" align="center" width="450px" height="450px">

                <tr>
                    <td>
                       <center><b>EDIT parent/Student/Teacher</b></center> 
			
			        <table>
				       <tr>
					      <td>Username:</td>
				          <td><input type="text" name="username" value="<?=$user['username']?>"></td>
				        </tr>
                        <tr>
                            <td>Id:</td>
                            <td><input type="text" name="userid" value="<?=$user['userid']?>"></td>
                          </tr>
				        <tr>
					        <td>Email:</td>
					        <td><input type="email" name="email" value="<?=$user['email']?>"></td>
				        </tr>
                        <tr>
					        <td>Date of Birth:</td>
					        <td><input type="date" name="date" value="<?=$user['date']?>"></td><hr/>
				        </tr>
                        <tr>
					        <td>Gender:</td>
					        <td>
                                <input type="radio" name="gender" value="Male">Male
                                <input type="radio" name="gender" value="Female">Female
                                <input type="radio" name="gender" value="Other">Other
                            </td>
				        </tr>
                        </tr>
                        <tr>
                           <td>Address:</td>
                           <td><input type="text" name="ad" value="<?=$user['ad']?>"></td>
                       </tr>
                       <tr>
                        <tr>
					        <td>Password:</td>
					        <td><input type="password" name="password" value="<?=$user['password']?>"></td>
				        </tr>
                        <tr>
					        <td>Picture:</td>
					        <td><input type="file" name="file" value=""></td>
				        </tr>
                        <tr>
					      <td>Type:</td>
				          <td><input type="text" name="usertype" value="<?=$user['usertype']?>"></td>
				        </tr>
                        
				        <tr>
					        <td colspan="2"><hr/></td>
					        
				        </tr>
                        <tr>
					        <td colspan="2"><input type="submit" name="submit" value="Edit">
                                <a href="ShowListTSP.php">BACK</a>
                            </td>
							<td><input type="hidden"name="id" value="<?=$user['id']?>"></td>
					        
				        </tr>
			         </table>
                    </td>
                </tr>
            </table>

	</form>
</body>
</html>
