 <?php 
    require_once('header.php');

    $server = "localhost" ;
    $username ="root";
    $password = "";
    $dbname ="project";

    $con = mysqli_connect($server, $username, $password, $dbname);

  if(isset($_REQUEST['submit']))
  {
    if (!empty($_POST['myname']) && !empty($_POST['name'])) {
       
       $value =$_POST['myname'];
       $type  =$_POST['name'];


     $sql ="insert into products(value,type) values('$value','$type')";

     $run =mysqli_query($con,$sql);

    }

    if($run){
      echo '

           <html>
           <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/Student/Send_Message_to_Faculty.css">
    </head>
           <body >

           <div id="d1">
        <img src="../../assets/Student/uni2.jpg" class="i1">
                </div>
                 <div id="d2">
              <table   align="center" height="40%" width="50%"  border="1">
               <tr>
                <td align="center"  ><h2>
                Application Porccessed...</h2>

                 </td>
                   </tr>
                     </table>
                   <center>  <a href="Home.php"><h3>Back to Home</h3></a></center>
                </div>
              </body>
            </html>


      ';
    }

  }

?>