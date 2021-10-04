<!DOCTYPE html>
<html>
<head>
	<title>Name Field </title>
</head>
<body>	
	<form method="post">
		<fieldset>
			<legend>Registration</legend>
            Name:<input type="text" name="myname" value="<?php 

if(isset($_REQUEST['submit']))
{
	$name = $_REQUEST['myname'];
	if($name == ""){
		echo "null value...";
	}else{
		echo $name;
	}	
}


?>"><br/><hr>

        Email:<input type="email" name="myemail" value="<?php
    if(isset($_REQUEST["submit"]))
    {

        $email=$_REQUEST["myemail"];
           if($email=="")
           {
               echo "null value...";
           }
           else
           {
               echo $email;
           }
    }
   

?>"><br/><hr>

            password:<input type="password"name="" value="">
            <input type="submit" name="submit" value="Submit">
         
		</fieldset>
	</form>
</body>
</html>




