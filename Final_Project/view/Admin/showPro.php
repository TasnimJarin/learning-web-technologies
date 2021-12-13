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
           <link rel="stylesheet" type="text/css" href="../../controller/Admin/showPro.css">
      </head>
      <div id="d1">
                  <img src="../../assets/Admin/newwb_back.jpg" class="c1"  >
      <body>
      
          <form>
          
                    <div id="db"> 
                            <div id ="d3"><img class="c9" src="../../assets/Admin/logo.jfif" height ="130px" width="120px"></div>
                            <div id ="d4"><h1 style="font-size:3.5vw"> University Portal</h1></div>
                            <div id ="d5">
                            <h3 >Welcome to Your Profile <?php echo $_COOKIE['loggedInName'] ?>  |||
                             <b><a href="EditPro.php">Edit Profile</a></b> |
                             <b><a href="Home.php">Back</a></b> </h3>
                             </div>

                 <div id ="d2">           
                         
                        <table border="1" align ="center"  width="54%" height ="30%" >
                         <tr>  
                           <td width="50px" ><h2> Name :  <?php echo $user['username'] ?></h2> </td> 
                           <td rowspan="3" width="26%" >  <img src=../../assets/Admin/<?php echo $user['file'] ?> height ="130px" width="180px">  </td>  </tr>
                         </tr>
                
                         <tr> 
                            <td ><h2>Id : <?php echo $user['userid'] ?></h2></td>
                         </tr>
                         <tr> 
                            <td ><h2>Email:  <?php echo $user['email'] ?></h2></td> 
                         </tr>               
                         <tr>  
                            <td colspan="2"><h2>Gender:  <?php echo $user['gender'] ?></h2></td> 
                        </tr>
                        <tr>  
                            <td colspan="2" ><h2>Date of bith: <?php echo $user['date'] ?></h2></td> 
                        </tr>
                        <tr>  
                            <td colspan="2" ><h2>Address:  <?php echo $user['ad'] ?></h2></td> 
                        </tr>


                 </table>
           </div>
           </div>
           </div>
         <form>
      </body>
</html>

