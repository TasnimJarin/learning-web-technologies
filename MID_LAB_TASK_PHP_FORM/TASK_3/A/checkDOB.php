<?php 

if(isset($_REQUEST['submit']))
{
	$name = $_REQUEST['DOB'];
	if($name == ""){
		echo "null value...";
	}else{
		echo $name;
	}	
}
?>