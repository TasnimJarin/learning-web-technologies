<?php
     echo "<table border=1>
     <tr>
          <td>";
          for($i=0; $i<3;$i++)
            {
              for($j=0;$j<=$i;$j++)
               {
               echo "*";
               }
            echo "<br/>";
            }
          "</td>";
          
           echo "<td>";
            for($i=3; $i>=1; $i--)
             {
                for($j=1;$j<=$i;$j++)
                {
                  echo $j;
                  
                }
             echo "<br/>";
            }
         
          "</td>";

         echo "<td>";
          
         $ch='A';

            for($i=0; $i<3;$i++)
             {
                for($j=0;$j<=$i;$j++)
                 {
                  echo  $ch++;
                 }
              echo "<br/>";
             }
         
         
          echo "</td>
     </tr>
     

        </table>";
?>
