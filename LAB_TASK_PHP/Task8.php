<?php
    
    echo "<table border=1 >
			<tr>
				<th>The array to declare</th>
				<th>Shapes to print</th>
				
			</tr>
            <tr>";
				echo "<td>";
                $st =   [
                    [1,2,3,'A'],
                    [1,2,'B','C'],
                    [1,'D','E','F']
                ];
                echo "<table border=1 >";
                      
                    for($i=0; $i<3; $i++)
                      {
                         echo "<tr>" ; 
                        for ($j=0; $j <4; $j++) 
                        { 
                           echo" <td>";
                             echo $st[$i][$j]." ";
                           echo" </td>";  
                        }
                         
                        
                        echo "</tr>" ; 
                       
                      }
                      
                      echo "</table >";
                                               
               echo "</td>";

				echo"<td>";
                
                    echo "<table border=1>
                    <tr>";
                          echo "<td>";
                           for($i=3; $i>=1; $i--)
                            {
                               for($j=1;$j<=$i;$j++)
                               {
                                 echo "*";
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
                    
               
                       </table>
                
                
                
                </td>
				
			</tr>

    </table>";




?>