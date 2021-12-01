<?php 

    require('header.php');
    require('../../model/Admin/usersModel.php');


    $userid= $_SESSION['userid'];
    $username= $_SESSION['username'];
    $password= $_SESSION['password'];
    

    $id = getUserByUserId($username,$password);
    $user = getUserById($id);

     

?>        
<html>
      <head>
           <title>Show Profile</title>
      </head>
      <body>
                  <table border="1" align ="center"  width="44%" height ="50%" >
                         <tr>
                            <td align="Left"  colspan="2" ><img src="../../asset/Admin/logo.jfif" height ="100px" width="100px">
                            <?php echo $_COOKIE['loggedInName'] ?> Welcome to Your Profile |||
                             <b><a href="EditPro.php">Edit Profile</a></b> |
                             <b><a href="Home.php">Back</a></b> 

                            
                         </tr>
                         
                        </tr>
                         <tr>  
                           <td width="50px" >  Name :  <?php echo $user['username'] ?></td> 
                           <td rowspan="3" width="26%" >  <img src=<?php echo $user['file'] ?> height ="100px" width="150px">  </td>  </tr>
                         </tr>
                
                         <tr> 
                            <td >Id : <?php echo $user['userid'] ?></td>
                         </tr>
                         <tr> 
                            <td >Email:  <?php echo $user['email'] ?></td> 
                         </tr>               
                         <tr>  
                            <td colspan="2">Gender:  <?php echo $user['gender'] ?></td> 
                        </tr>
                        <tr>  
                            <td colspan="2" >Date of bith: <?php echo $user['date'] ?></td> 
                        </tr>
                        <tr>  
                            <td colspan="2" >Address:  <?php echo $user['ad'] ?></td> 
                        </tr>


                 </table>
      </body>
</html>

