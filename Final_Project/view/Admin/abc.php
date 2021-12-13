<?php 
require('header.php');


	$search = $_REQUEST['name'];

       $con = mysqli_connect('localhost', 'root', '', 'project');

        $sql="select * from users where username like '%{$search}%'";
        $result=mysqli_query($con, $sql);
        


	$data = "<table border=1>
				<th>NAME</th>
			   <th>ID</th>
			  <th>EMAIL</th>
			  <th>GENDER</th>
              <th>Date Of Birth</th>
             <th>Address</th>
              <th>USERTYPE</th>
             ";

	while ($row = mysqli_fetch_assoc($result)) {
		$data .= 	"<tr>
						<td>{$row['username']}</td>
						<td>{$row['userid']}</td>
						<td>{$row['email']}</td>
						<td>{$row['gender']}</td>
                        <td>{$row['date']}</td>
                        <td>{$row['ad']}</td>
						<td>{$row['usertype']}</td>
                        
				
                        

					</tr>";
	}

	$data .= "</table>";
	echo $data;
?>