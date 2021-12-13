<?php
   include('../../controller/Admin/regCheck.php');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGSTRATION PAGE</title>
	<link rel="stylesheet" type="text/css" href="../../controller/Admin/style.css">
</head>
<body>

	<form name="myform"  method="post"  onsubmit="return validation()"  >
		<div id="d1">
            
			<img src="../../assets/Admin/back2.jpeg" class="c1"  >
       </div>
             <div id="d3" >
	             <div class="c2">
		

                       <center> <legend><h2>REGSTRATION</h2></legend></center>
                               <b>Username:</b><br/>
							   <input type="text" name="username" id="username" value="" placeholder="Enter Username"><span id="err-username" ></span> <br/>
							   <b>Id:</b><br/>
							   <input type="text" name="id" id="id" value="" placeholder="Enter UserId"><span id="err-id" ></span>*Can contain 0-9, dash only<br/>
							   <b>Email:</b><br/>
							   <input type="email" name="email" id="email" value="" placeholder="Enter Valid Email"><span id="err-email" ></span>*(anything@example.com)<br/>
							   <b>Date of Birth:</b><br/>
							   <input type="date" name="date" id="date" value="date" ><span id="err-date" ></span><br/>
							   <b>Gender:</b><br/>
                                <input type="radio" name="gender" id="Male" value="Male"><b>Male</b>
                                <input type="radio" name="gender" id="Female" value="Female"><b>Female</b>
                                <input type="radio" name="gender" id="Other" value="Other"><b>Other</b><span id="err-gender" ></span><br/>
								
                              <b>Address:</b></td><br/>
                              <input type="text" name="add" value="" id="add" placeholder="Enter Address"><span id="err-add" ></span><br/>
							  <b>Password:</b><br/>
							  <input type="password" name="password" id="password" value="" placeholder="Enter Password"><span id="err-password" ></span><br/>
							  <b>Picture:</b><br/>
							  <input type="file" name="file" id="file" value=""><span id="err-file" ></span><br/><br/>
							  <b>User Type:</b><br/>
                                <input type="radio" name="usertype" id="Admin " value="Admin"><b>Admin</b>
                                <input type="radio" name="usertype" id="Teacher " value="Teacher"><b>Teacher</b>
								<input type="radio" name="usertype" id="Student" value="Student"><b>Student</b>
                                <input type="radio" name="usertype" id="Parent"  value="Parent"><b>Parent</b><span id="err-usertype" ></span><br/>

							  <input type="submit" name="submit" value="Submit" ><br/><br/>
							  Back to <a href="login.html">Login</a>

                              

				 </div>
			 </div>
			 <script type="text/javascript" src="scriptReg.js"></script>
			 
                           
	</form>




</body>
</html>


