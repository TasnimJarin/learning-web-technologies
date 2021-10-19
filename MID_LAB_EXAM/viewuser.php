<?php
     session_start();
      
     $myfile = fopen('user.txt', 'r');

     echo '
         <html>
             <body>
                 <table border="1">
                     <tr>
                         <th colspan="3">Users</th>
                     </tr>
                     <tr>
                         <th>ID</th>
                         <th>NAME</th>
                         <th>USER TYPE</th>
                     </tr>';

     while (!feof($myfile)) {
         $data = fgets($myfile);
         if ($data != "") {
             $user = explode('|', $data);
             echo '
                     <tr>
                         <td>' . trim($user[0]) . '</td>
                         <td>' . trim($user[2]) . '</td>
                         <td>' . trim($user[3]) . '</td>
                     </tr>
             ';
         }
     }
     echo '
                     <tr>
                         <td colspan="3"><a href="AdminHome.php">Go Home</a></td>
                     </tr>
                 </table>
             </body>
         </html>
         ';

?>