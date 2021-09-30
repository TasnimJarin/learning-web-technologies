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