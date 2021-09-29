<!DOCTYPE html>
<html>
      <head>

      </head>

      <body>
          <form method="POST">
              <fieldset>
                  <legend>Email</legend>
                     <input type="email" name="myemail" value="<?php
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
   

?>"><br/><hr>
                     <input type="submit" name="submit" value="Submit">



              </fieldset>
          </form>


      </body>

</html>