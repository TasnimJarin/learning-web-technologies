<!DOCTYPE html>
<html>
      <head>
          <title>Date of Birth</title>
      </head>

      <body>
           <form method="POST">
               <fieldset>
                   <legend>Date Of Birth</legend>
                   <table>
                       <tr>
                           <td align="center">dd</td>
                           <td align="center">mm</td>
                           <td align="center">yy</td>
                       </tr>

                       <tr>
                           <td><input type="text" size="3" name="DOB1" value="<?php 

if(isset($_REQUEST['submit']))
{
	$name = $_REQUEST['DOB1'];
	if($name == ""){
		echo "null value...";
	}else{
		echo $name;
	}	
}
?>">/</td>
                           <td><input type="text" size="3" name="DOB2" value="<?php 

if(isset($_REQUEST['submit']))
{
	$name = $_REQUEST['DOB2'];
	if($name == ""){
		echo "null value...";
	}else{
		echo $name;
	}	
}
?>">/</td>
                           <td><input type="text" size="3" name="DOB3" value="<?php 

if(isset($_REQUEST['submit']))
{
	$name = $_REQUEST['DOB3'];
	if($name == ""){
		echo "null value...";
	}else{
		echo $name;
	}	
}
?>"></td>
                       </tr>
                       
                   </table>
                          <hr>
                          <input type="submit" name="submit" value="Submit">
               </fieldset>
           </form>

      </body>



</html>