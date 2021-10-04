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

            <?php
                      if (isset($_REQUEST["submit"])) 
                      {
                          if (isset(($_REQUEST['gender']))) 
                          {
                              echo  $_REQUEST['gender'] . "  selected";
                          }
                       
                       else 
                        {
                           echo "At least one of them must be selected";
                        }
                     }
            ?>


              </fieldset>
          </form>


      </body>

</html>