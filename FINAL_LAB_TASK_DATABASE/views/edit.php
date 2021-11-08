<?php
	session_start();
    require_once('../model/usersModel.php');

    $id= $_REQUEST['edit'];

   $user = getProductById($id);
    // print_r($user);


?>

<html>
<head>
	<title>EDIT</title>
</head>

<body>
	
	<form method="post" action="../controller/productEdit.php">
		<fieldset>
			<legend>EDIT PRODUCT</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?=$user['name']?>"></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<td><input type="number" name="buying" value="<?=$user['buying']?>"></td>
				</tr>
				<tr>
					<td>Selling Price:</td>
					<td><input type="number" name="selling" value="<?=$user['selling']?>"></td>
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
					<td><input type="hidden"name="id" value="<?=$user['id']?>"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>