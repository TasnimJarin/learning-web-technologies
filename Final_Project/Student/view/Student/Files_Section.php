<?php
    include_once('header.php');

     $myfile = fopen('../../model/Student/files.txt', 'r');

     while (!feof($myfile)) {
         $data = fgets($myfile);
           $user = explode('|', $data);
         if ($data != "") {
           
             echo '
               <html>
                 <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Registration Page</title>
                <link rel="stylesheet" type="text/css" href="../../CSS/Student/Files_Section.css">

               </head>
                
                 <body>
                 <div id="d1">
        <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
                  <table width="50%" height="80%"   border="1" class="i2" >

                        <tr>
                         <td colspan="2" align="Center"  ><b><h3>Files</h3></b>
                         </td>
                
                        </tr>
                       
                
               <tr>  <td >    <b> COURSE PLAN(WEB)</b>     <a href="' . trim($user[0]) . '">download </a> </td> 
                     <td  >     <b> Finished Project Report(WEB)</b>   <a href="' . trim($user[1]) . '">download</a>  </td> </tr>
                  <tr>
                      <tr>  <td  >    <b> HTML-FORM(WEB)</b>     <a href="' . trim($user[2]) . '">download </a> </td> 
                     <td >     <b> ASSESSMENT TASK(WEB)</b>   <a href="' . trim($user[3]) . '">download</a>  </td> </tr>
                  <tr>
                      <tr>  <td  >    <b> Slide 1(OS)</b>     <a href="' . trim($user[4]) . '">download </a> </td> 
                     <td>     <b> Term Project Proposal(WEB)</b>   <a href="' . trim($user[1]) . '">download</a>  </td> </tr>
                  <tr>
                      <tr>  <td  >    <b> Slide 2(OS)</b>     <a href="' . trim($user[2]) . '">download </a> </td> 
                     <td>     <b> Term Project Proposal(WEB)</b>   <a href="' . trim($user[4]) . '">download</a>  </td> </tr>
                         </div>
                       <div id="d3"><a href="Home.php"><h3>Back</h3></a></div>

              
                   </table>
                                  ';
         }
     }
     echo '
                    
            
             </body>
         </html>
         ';
 
?>