<?php

    if(isset($_REQUEST['submit']))
    {
        $degree =$_REQUEST['check'];
        
		   if($degree=="")
           {
               echo "invalid....." ;
           }
           else
           {
               $n=count($degree);
            for($i=0; $i<$n; $i++)
            {
              echo($degree[$i] . "  ");
            }
           }
       
	
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Degree</title>
</head>

<body>
    <form method="POST">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="check[]" value="SSC"> SSC
            <input type="checkbox" name="check[]" value="HSC"> HSC
            <input type="checkbox" name="check[]" value="BSc"> BSc
            <input type="checkbox" name="check[]" value="MSc"> MSc
        
        <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>