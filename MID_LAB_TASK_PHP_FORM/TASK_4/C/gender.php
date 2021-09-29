<!DOCTYPE html>
<html>
      <head>

      </head>

      <body>
          <form method="POST">
              <fieldset>
                  <legend>Gender</legend>
                  <input type="radio" name="gender" value= "Male" <?php
         
         if (isset($_REQUEST['submit'])) 
              {
                if ($_REQUEST['gender'] == "Male")
               {
                 echo 'checked';
                } 
                else 
                {
                  echo '';
                }
              }
     ?>>Male
                  <input type="radio" name="gender" value= "Female"<?php
         
         if (isset($_REQUEST['submit'])) 
              {
                if ($_REQUEST['gender'] == "Female")
               {
                 echo 'checked';
                } 
                else 
                {
                  echo '';
                }
              }
     ?>>Female
                  <input type="radio" name="gender" value= "Other" <?php
         
    if (isset($_REQUEST['submit'])) 
         {
           if ($_REQUEST['gender'] == "Other")
          {
            echo 'checked';
           } 
           else 
           {
             echo '';
           }
         }
?>>Other
                  <br/><hr>
                  <input type="submit" name="submit" value="Submit">


              </fieldset>
          </form>


      </body>

</html>