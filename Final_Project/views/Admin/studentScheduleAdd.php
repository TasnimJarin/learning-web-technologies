<?php 

    require_once('header.php')

?>

<html>
    <head>
    <title>ADD student Schedule</title>
    </head>
    <body>

                   <form method="POST" action="../../controller/Admin/studentScheduleCheck.php">
                   <fieldset>
                        
                   <center>  
                       Student Id:
                       <input type="text" name="sid" Value=""><br/><br/>
                       CLASS TIME and SUBJECT (Saturday):
                       <input type="text" name="Saturday" Value=""><br/><br/>
                       CLASS TIME and SUBJECT (Sunday):
                       <input type="text" name="Sunday" Value=""><br/><br/>
                       CLASS TIME and SUBJECT (Monday):
                       <input type="text" name="Monday" Value=""><br/><br/>
                       CLASS TIME and SUBJECT (Tuesday):
                       <input type="text" name="Tuesday" Value=""><br/><br/>
                       CLASS TIME and SUBJECT (Wednesday):
                       <input type="text" name="Wednesday" Value=""><br/><br/>
                       CLASS TIME and SUBJECT (Thursday):
                       <input type="text" name="Thursday" Value=""><br/><br/>
                       
  
                       <input type="submit" name="submit" Value="Add_Student schedule"></center>
                       <center><h4><a href="studentSchedule.php">BACK</a><h4></center>
                       
                       
  
                      
                      </fieldset>

                    </form>
    </body>
</html>