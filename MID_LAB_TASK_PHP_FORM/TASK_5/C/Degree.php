<!DOCTYPE html>
<html>

<head>
    <title>Degree</title>
</head>

<body>
    <form method="POST">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="check" value="SSC" <?php

if(isset($_REQUEST['submit']))
{
    $degree =$_REQUEST['check'];
    
    if ($_REQUEST['check'] == "SSC ")
    {
      echo 'checked';
     } 
     else 
     {
       echo '';
     }
   

}
?>> SSC
            <input type="checkbox" name="check" value="HSC" <?php

if(isset($_REQUEST['submit']))
{
    $degree =$_REQUEST['check'];
    
    if ($_REQUEST['check'] == "HSC")
    {
      echo 'checked';
     } 
     else 
     {
       echo '';
     }
       
   

}
?>> HSC
            <input type="checkbox" name="check" value="BSc" <?php

if(isset($_REQUEST['submit']))
{
    $degree =$_REQUEST['check'];
    
    if ($_REQUEST['check'] == "BSc")
    {
      echo 'checked';
     } 
     else 
     {
       echo '';
     }
   

}
?>> BSc
            <input type="checkbox" name="check" value="MSc" <?php

if(isset($_REQUEST['submit']))
{
    $degree =$_REQUEST['check'];
    
    if ($_REQUEST['check'] == "MSc")
    {
      echo 'checked';
     } 
     else 
     {
       echo '';
     }
   

}
?>> MSc
        
        <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>