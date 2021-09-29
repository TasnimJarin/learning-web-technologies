<!DOCTYPE html>
<html>
<head>
	<title>Name Field </title>
</head>
<body>	
	<form method="post">
		<fieldset>
			<legend>NAME</legend>
            <input type="text" name="myname" value="<?php 

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
            <input type="submit" name="submit" value="Submit">
         
		</fieldset>
	</form>
</body>
</html>




