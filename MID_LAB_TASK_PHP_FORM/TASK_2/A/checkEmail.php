<?php
    if(isset($_REQUEST["submit"]))
    {

        $email=$_REQUEST["myemail"];
           if($email=="")
           {
               echo "null value...";
           }
           else
           {
               echo $email;
           }
    }
    else
    {
        echo "invalid....";
    }

?>