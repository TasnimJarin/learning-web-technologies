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
