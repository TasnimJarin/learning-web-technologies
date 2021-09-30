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
            <option value="A+"<?php

if(isset($_REQUEST['submit']))
{
    
    $bloodGroup = $_REQUEST['bloodGroup'];
    
    if($bloodGroup =="A+")
    {
        echo "A+";
    }
    
}
?>>A+</option>
            <option value="A-"<?php

if(isset($_REQUEST['submit']))
{
    
    $bloodGroup = $_REQUEST['bloodGroup'];
    
    if($bloodGroup =="A-")
    {
        echo "A-";
    }
    
}
?>>A-</option>
            <option value="B+"<?php

if(isset($_REQUEST['submit']))
{
    
    $bloodGroup = $_REQUEST['bloodGroup'];
    
    if($bloodGroup =="B+")
    {
        echo "B+";
    }
   
}
?>>B+</option>
            <option value="B-"<?php

if(isset($_REQUEST['submit']))
{
    
    $bloodGroup = $_REQUEST['bloodGroup'];
    
    if($bloodGroup =="B-")
    {
        echo "B-";
    }
    
}
?>>B-</option>
            <option value="O+"<?php

if(isset($_REQUEST['submit']))
{
    
    $bloodGroup = $_REQUEST['bloodGroup'];
    
    if($bloodGroup =="O+")
    {
        echo "O+";
    }
    else
    {
        echo $bloodGroup;
    }
}
?>>O+</option>
            <option value="O-"<?php

if(isset($_REQUEST['submit']))
{
    
    $bloodGroup = $_REQUEST['bloodGroup'];
    
    if($bloodGroup =="O-")
    {
        echo "O-";
    }
    else
    {
        echo $bloodGroup;
    }
}
?>>O-</option>
            <option value="AB+"<?php

if(isset($_REQUEST['submit']))
{
    
    $bloodGroup = $_REQUEST['bloodGroup'];
    
    if($bloodGroup =="AB+")
    {
        echo "AB+";
    }
    else
    {
        echo $bloodGroup;
    }
}
?>>AB+</option>
            <option value="AB-"<?php

if(isset($_REQUEST['submit']))
{
    
    $bloodGroup = $_REQUEST['bloodGroup'];
    
    if($bloodGroup =="AB-")
    {
        echo "AB-";
    }
    
}
?>>AB-</option>
        </select>
        <br/>
        <hr>
        <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>
</body>

</html>