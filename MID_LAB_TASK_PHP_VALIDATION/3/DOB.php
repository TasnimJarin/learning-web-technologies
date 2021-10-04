<!DOCTYPE html>
<html>
      <head>
          <title>Date of Birth</title>
      </head>

      <body>
           <form method="POST">
               <fieldset>
                   <legend>Date Of Birth</legend>
                   <table>
                       <tr>
                           <td align="center">dd</td>
                           <td align="center">mm</td>
                           <td align="center">yy</td>
                       </tr>

                       <tr>
                           <td><input type="text" size="3" name="day" value="<?php 

if(isset($_REQUEST['submit']))
{
	   $day = $_REQUEST['day'];

         if ($day == "" || $day < 1 || $day > 31 ) 
        {
            echo "invalid";
                
         }
         else
         {

           echo $day ;

         }
}
?>">/</td>
                           <td><input type="text" size="3" name="month" value="<?php 

if(isset($_REQUEST['submit']))
{
        $month = $_REQUEST['month'];

         if ($month == ""||$month < 1 || $month > 12  ) 
        {
            echo "invalid";
                
         }
         else
         {

           echo $month ;

         }
}
?>">/</td>
                           <td><input type="text" size="3" name="year" value="<?php 

if(isset($_REQUEST['submit']))
{
     $year = $_REQUEST['year'];

    
         if ( $year == "" || $year < 1953 || $year > 1998) 
        {
            echo "invalid";
                
         }
         else
         {

            echo $year;
         }
}
?>"></td>
                       </tr>
                       
                   </table>
                          <hr>
                          <input type="submit" name="submit" value="Submit">
               </fieldset>
           </form>

      </body>



</html>