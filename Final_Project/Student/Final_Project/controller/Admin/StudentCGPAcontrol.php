
<?php
        session_start();
           
       
        if(isset($_REQUEST['submit']))
        {
              $cgpa=$_REQUEST['cgpa'];
              $id=$_REQUEST['id'];
                        
                         function editUser($user)
                         {
                                $server = "localhost" ;
                                $username ="root";
                                $password = "";
                                $dbname ="project";
        
                                $con = mysqli_connect($server, $username, $password, $dbname);
                          

       
                           $sql="update sschedule set cgpa='{$user['cgpa']}' where id='{$user['id']}' ";
                           if(mysqli_query($con,$sql))
                              {
                                return true;
                                 }
                              else
                              {
                            echo false;
                            }
 
                         }
                
                     
                 
                     
                               $user= ['id'=>$id , 'cgpa'=>$cgpa ];
                               $status=editUser($user);



             
                      

             
                                    if($status)
                                    {
                                       header('location:../../views/Admin/StudentCGPA.php');
                                    }
                                    else
                                    {
                                       echo "ERROR";
                                    }            
             
             
             
             
             
             
             
             
            
            
        }
?>

