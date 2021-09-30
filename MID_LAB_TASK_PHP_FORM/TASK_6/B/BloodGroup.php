<?php

    if(isset($_REQUEST['submit']))
    {
        
        $bloodGroup = $_REQUEST['bloodGroup'];
        
        if($bloodGroup =="")
        {
			echo " ";
		}
        else
        {
			echo $bloodGroup;
		}
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Blood Group</title>
</head>

<body>
    <form method="POST">
        <fieldset>
            <legend>Blood Group</legend>
           <select name="bloodGroup" >
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <br/>
        <hr>
        <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>
</body>

</html>