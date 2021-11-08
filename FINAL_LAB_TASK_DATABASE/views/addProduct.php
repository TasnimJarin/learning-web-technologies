<?php
	session_start();
    require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $buying=$_POST['buying'];
    $selling=$_POST['selling'];

		if($name != ""){
			if($buying != ""){
				if($selling != ""){

					  $product =[
                               'name'=> $name,
                               'buying'=>$buying,
                               'selling'=>$selling
                              ];

                        $status= addProducts($product);

                      if($status)
                      {
                        
                         if(isset($_POST['dis']))
                         {
                             echo "NAME :" .$name ."<br/>";
                             echo  "Buying Price:" .$buying."<br/>";
                             echo  "Selling :" .$selling."<br/>";
                             

                         }
                         else
                         {

                         }

                      }
                      else
                      {
                          echo"Try Again........";
                      }
				}else{
					echo "Invalid selling...";
				}	
			}else{
				echo "Invalid Buying...";
			}
		}else{
			echo "Invalid Name...";
		}
	}
?>




<html>
<head>
	<title>Create New User</title>
</head>

<body>
	
	<form method="post">
		<fieldset>
			<legend>ADD PRODUCT</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<td><input type="number" name="buying" value=""></td>
				</tr>
				<tr>
					<td>Selling Price:</td>
					<td><input type="number" name="selling" value=""></td>
				</tr>
                <tr>
					<td><input type="checkbox"name="dis" value="dis">Display</td>
					<td></td>
				</tr>
                <tr>
					<td colspan="2"><hr/></td>
					
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="SAVE"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>