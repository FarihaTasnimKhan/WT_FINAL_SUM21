<?php
	include 'Controller/ManagerController.php';
	

$id= $_GET["id"];
$m = getManager($id);
?>
<html><title>UPDATE MANAGER</title>
	<body><h1>UPDATE MANAGER</h1>
	<fieldset>
		<form action="" method="POST">
			<table align="center">
				<tr><td>
					<input type="hidden"   name="id" value="<?php echo $id?>"></td></tr>
					<tr><td>Name:</td>
					<td><input type="text" name="name" value="<?php echo $m["Name"];?>" placeholder="Name"></td></tr>
					<tr><td>Email:</td>
						<td><input type="text" name="email" value="<?php echo $m["Email"];?>" placeholder="Email">
						</td>
						
					</tr>
					<tr><td>Address:</td>
						<td><input type="text" name="address" value="<?php echo $m["Address"];?>" placeholder="Salary">
						</td>
						
					</tr>
					<tr><td>Salary:</td>
						<td><input type="text" name="salary" value="<?php echo $m["Salary"];?>" placeholder="Salary">
						</td>
						
					</tr>
				
				<tr>
					<td align="right">
						<input type="submit" name="updateManager" value="Update Manager">
					</td>
				</tr>
			</table>
		</form>
		</fieldset>
	</body>
</html>