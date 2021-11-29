<?php 

    require_once('header.php');
    
    if(isset($_REQUEST['submit']))
          
    {
        $Sem= $_REQUEST["Semester"];
        if($Sem == "2020-2021,Fall"){
            echo '
                <html>
                   <head>
      
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Registration Page</title>
                <link rel="stylesheet" type="text/css" href="../../CSS/Student/Show_Courses_Results.css">
            </head> 

                <body>
                <div id="d1">
                <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
                 
                    <table align ="center" border="1" >
                        <tr>
                         <td  colspan="3" align="Center"><b><h1>2020-2021,Fall</b><h1>
                         </td></tr>
                          
                               <tr>
                               <td  ><b><u>Courses</u></b></td>
                                 <td ><b><u>Grade</u></b></td>
                                  <td  ><b><u>Marks</u></b></td>
                               </tr>
                               <tr>
                               <td >ALGORITHMS [I]</td>
                               <td align="center" >A+</td>
                               <td  align="center" >90</td>

                               </tr>
                               <tr>
                               <td >NTRODUCTION TO DATABASE [E]</td>
                               <td align="center">A</td>
                               <td  align="center" >85</td>

                               </tr>
                               <tr>
                               <td  > OBJECT ORIENTED PROGRAMMING 1 (JAVA) [L]</td>
                               <td align="center" >A</td>
                               <td  align="center" >85</td>

                               </tr>
                                <tr>
                               <td>COMPUTER GRAPHICS</td>
                               <td  align="center" >A+</td>
                               <td  align="center" >95</td>

                               </tr>
                           </table>
                             </div>
                        
                      <div id="d3" >  <h3> <center> <a href="Show_Courses_results.html">Back</a> |
                        <a href="Home.php">Go to Homepage</center> </h3></div>

                        

                        
                       
                     

                   </body>

                   </html>
            ';
        }
         if($Sem == "2020-2021,Spring"){
            echo '
                <html>
                   <head>
      
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Registration Page</title>
                <link rel="stylesheet" type="text/css" href="../../CSS/Student/Show_Courses_Results.css">
            </head> 

                <body>
                <div id="d1">
                <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
                 
                    <table align ="center" border="1" >
                        <tr>
                         <td  colspan="3" align="Center"><b><h1>2020-2021,Spring</b><h1>
                         </td></tr>
                          
                               <tr>
                               <td  ><b><u>Courses</u></b></td>
                                 <td ><b><u>Grade</u></b></td>
                                  <td  ><b><u>Marks</u></b></td>
                               </tr>
                               <tr>
                               <td >OBJECT ORIENTED ANALYSIS AND DESIGN</td>
                               <td align="center" >A+</td>
                               <td  align="center" >90</td>

                               </tr>
                               <tr>
                               <td >THEORY OF COMPUTATION</td>
                               <td align="center">A</td>
                               <td  align="center" >85</td>

                               </tr>
                               <tr>
                               <td  > COMPLEX VARIABLE,LAPLACE & Z-TRANSFORMATION</td>
                               <td align="center" >A</td>
                               <td  align="center" >85</td>

                               </tr>
                                <tr>
                               <td>COMPUTER GRAPHICS</td>
                               <td  align="center" >A+</td>
                               <td  align="center" >95</td>

                               </tr>
                           </table>
                             </div>
                        
                      <div id="d3" >  <h3> <center> <a href="Show_Courses_results.html">Back</a> |
                        <a href="Home.php">Go to Homepage</center> </h3></div>

                        

                        
                       
                     

                   </body>

                   </html>
            ';
        }
          if($Sem == "2020-2021,Summer"){
            echo '
                <html>
                   <head>
      
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Registration Page</title>
                <link rel="stylesheet" type="text/css" href="../../CSS/Student/Show_Courses_Results.css">
            </head> 

                <body>
                <div id="d1">
                <img src="../../Student/assets/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
                
                    <table align ="center" border="1" >
                        <tr>
                         <td  colspan="3" align="Center" ><b><h1>2020-2021,Summer</b><h1>
                         </td></tr>
                          
                               <tr>
                               <td ><b><u>Courses</u></b></td>
                                 <td ><b><u>Grade</u></b></td>
                                  <td><b><u>Marks</u></b></td>
                               </tr>
                               <tr>
                               <td> OBJECT ORIENTED PROGRAMMING 1 (JAVA)</td>
                               <td  align="center" >A+</td>
                               <td  align="center" >92</td>

                               </tr>
                               <tr>
                               <td  > SOFTWARE ENGINEERING</td>
                               <td  align="center" >A+</td>
                               <td  align="center" >91</td>

                               </tr>
                               <tr>
                               <td >MATRICES, VECTORS, FOURIER ANALYSIS</td>
                               <td  align="center" >A+</td>
                               <td  align="center" >95</td>

                               </tr>
                                  <tr>
                               <td >DATA COMMUNICATION</td>
                               <td align="center" >A</td>
                               <td align="center" >87</td>

                               </tr>
                        
                         </table>
                           </div>
                        
                         <div id="d3" > <h3> <center> <a href="Show_Courses_results.html">Back</a> |
                        <a href="Home.php">Go to Homepage</center> </h3></div>
                        

                        
                       
                  

                   </body>

                   </html>
            ';
        }
         if($Sem == "2021-2022,Fall"){
            echo '
                 <html>
                  <head>
      
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Registration Page</title>
                <link rel="stylesheet" type="text/css" href="../../CSS/Student/Show_Courses_Results.css">
            </head> 

                <body>
                <div id="d1">
                <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                <div id="d2" >
                    <table align ="center" border="1" >
                        <tr>
                         <td  colspan="3" align="Center"  ><b><h1>2020-2022,Fall</b><h1>
                         </td></tr>
                          
                               <tr>
                               <td ><b><u>Courses</u></b></td>
                                 <td ><b><u>Grade</u></b></td>
                                  <td ><b><u>Marks</u></b></td>
                               </tr>
                               <tr>
                               <td> ARTIFICIAL INTELLIGENCE AND EXPERT SYSTEM</td>
                               <td  align="center" >A+</td>
                               <td  align="center" >90</td>

                               </tr>
                               <tr>
                               <td  >OBJECT ORIENTED PROGRAMMING 2</td>
                               <td align="center" >A+</td>
                               <td  align="center" >92</td>

                               </tr>
                               <tr>
                               <td > DATA WAREHOUSING AND DATA MINING [CS]</td>
                               <td  align="center" >A+</td>
                               <td  align="center" >94</td>

                               </tr>
                                 <tr>
                               <td> NUMERICAL METHODS FOR SCIENCE AND ENGINEERING</td>
                               <td align="center" >A+</td>
                               <td align="center" >91</td>

                               </tr>
                        
                          </table>
                            </div>
                        
                         <div id="d3" >   <h3> <center> <a href="Show_Courses_results.html">Back</a> |
                        <a href="Home.php">Go to Homepage</center> </h3></div>
                        

            

                   </body>

                   </html>
            ';
        }
         
    }
    
    else{
        header('location: Loginform.html');
    }

?>
