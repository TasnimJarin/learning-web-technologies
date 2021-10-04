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
            if($n<2)
            {
                echo "At least two of them must be selected";
            }
            else
            {
               echo $degree[$i] . "  ";
            }
         }
       }
   

}
?>
    </fieldset>
</form>
</body>

</html>