
<?php
        session_start();
        require_once('../../model/Admin/usersModel.php');
           
       
        if(isset($_REQUEST['submit']))
        {
              $cgpa=$_REQUEST['cgpa'];
              $id=$_REQUEST['id'];
                        
 
                               $user= ['id'=>$id , 'cgpa'=>$cgpa ];
                               $status=editStudentcgpa($user);

             
                                    if($status)
                                    {
                                       header('location:../../view/Admin/StudentCGPA.php');
                                    }
                                    else
                                    {
                                       echo "ERROR";
                                    }            
             
             
             
             
             
             
             
             
            
            
        }
?>

