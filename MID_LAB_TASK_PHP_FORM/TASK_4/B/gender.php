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

<!DOCTYPE html>
<html>
      <head>

      </head>

      <body>
          <form method="POST">
              <fieldset>
                  <legend>Gender</legend>
                  <input type="radio" name="gender" value= "Male">Male
                  <input type="radio" name="gender" value= "Female">Female
                  <input type="radio" name="gender" value= "Other">Other
                  <br/><hr>
                  <input type="submit" name="submit" value="Submit">


              </fieldset>
          </form>


      </body>

</html>