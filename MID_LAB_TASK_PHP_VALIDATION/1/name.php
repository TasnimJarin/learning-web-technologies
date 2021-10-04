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
		      echo "Enter_your_name!";
		}
        else
        {
			 if(strlen($name)>=2)
             {
				$c = ord($name);
					if ($c < 65 || $c > 122 ) 
					{
						echo "Only Letter";
					}
					else
					{
                        echo $name;
					}
				              
             }
             else
             {
                 echo "Enter_least_two_words!!";
             }
		}	
	}
	
?>"><br/><hr>
            <input type="submit" name="submit" value="Submit">
         
		</fieldset>
	</form>
</body>
</html>