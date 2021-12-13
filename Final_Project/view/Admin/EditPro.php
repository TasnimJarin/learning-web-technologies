<?php 

    require_once('header.php');
    require('../../model/Admin/usersModel.php');

	$userid= $_SESSION['userid'];
    $username= $_SESSION['username'];
    $password= $_SESSION['password'];
    

    $id = getUserByUserId($username,$password);
    $user = getUserById($id);

?>

<html>

      <head>
      <title>Edit Profile</title>
      <link rel="stylesheet" type="text/css" href="../../controller/Admin/showPro.css">
      </head>
      <div id="d1">
                  <img src="../../assets/Admin/backclouds.jpg" class="c1"  >

      <body>
      <form method="post" action="../../controller/Admin/EditProcheck.php">
      <div id ="de2">  
        
       <div id ="d3"><img class="c9" src="../../assets/Admin/logo.jfif" width="101px" height="101px"></div>
       <div id ="d4"><h1 style="font-size:3.5vw"> University Portal</h1></div>
          
          <table border="1" align="center" width="680px" height="450px">
              <tr>
                  <td>
                  <div id ="de3">  <legend><h2>EDIT PROFILE</h2></legend></div>
          
                  <table >
                     <tr>
                        <td><b>Username:</b></td>
                        <td><input type="text" name="usernameE" value="<?=$user['username']?> "></td>
                      </tr>
                      <tr>
                          <td><b>Id:</b></td>
                          <td><input type="text" name="idE" value="<?=$user['userid']?>"></td>
                        </tr>
                      <tr>
                          <td><b>Email:</b></td>
                          <td><input type="email" name="emailE" value="<?=$user['email']?>"></td>
                      </tr>
                      <tr>
                          <td><b>Date of Birth:</b></td>
                          <td><input type="date" name="dateE" value="<?=$user['date']?>"></td><hr/>
                          
                      </tr>
                      <tr>
                          <td><b>Gender:</b></td>
                          <td>
                              <input type="radio" name="genderE" value="Male"><b>Male</b>
                              <input type="radio" name="genderE" value="Female"><b>Female</b>
                              <input type="radio" name="genderE" value="Other"><b>Other</b>
                              
                          </td>
                      </tr>
                      </tr>
                      <tr>
                         <td><b>Address:</b></td>
                         <td><input type="text" name="addE" value="<?=$user['ad']?>"></td>
                     </tr>
                     <tr>
                      <tr>
                          <td><b>Password:</b></td>
                          <td><input type="password" name="passwordE" value="<?=$user['password']?>"></td>
                      </tr>
                      
                      <tr>
                          <td><b>Picture:</b></td>
                          <td><input type="file" name="fileE" value=""></td>
                      </tr>
                      <tr>
					      <td></td>
				          <td><input type="hidden" name="usertype" value="<?=$user['usertype']?>"></td>
				      </tr>
                      
                      <tr>
                          <td colspan="2"><hr/></td>
                          
                      </tr>
                      <tr>
                          <td colspan="2"><input type="submit" name="submit" value="Edit">
                              <a href="showPro.php">BACK</a>

                          </td>
                          <td><input type="hidden"name="id" value="<?=$user['id']?>"></td>
                          
                      </tr>
                   </table>
                  </td>
              </tr>
          </table>

         </div>
         <div>



      </body>
</html>