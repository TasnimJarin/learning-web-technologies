<?php

    if(isset($_REQUEST['submit']))
    {
        $gender = $_REQUEST['gender'];

        if($gender!="")
        {
            echo $gender;
        }
        else
        {
            echo 'Invalid Input';
        }
    }
?>