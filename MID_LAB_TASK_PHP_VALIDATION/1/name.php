<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
		if($name=="")
        {
		      echo "You_must_enter_your_name!";
		}
        else
        {
			 if(strlen($name)>=2)
             {
                 
                 echo $name;
             }
             else
             {
                 echo "you_must_enter_least_words!!";
             }
		}	
	}
	
?>"><br/><hr>
            <input type="submit" name="submit" value="Submit">
         
		</fieldset>
	</form>
</body>
</html>