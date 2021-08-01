<?php
	include 'Controller/ManagerController.php';
	

$id= $_GET["id"];
$m = getManager($id);
?>
<html>
<fieldset>
	<body>
	
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden"   name="id" value="<?php echo $id?>"></td></tr>
					<tr>	<td><input type="text" name="name" value="<?php echo $m["Name"];?>" placeholder="Service"></td></tr>
					<tr><td>	<input type="text" name="email" value="<?php echo $m["Email"];?>" placeholder="Service"></td></tr>
				<tr>	<td>	<input type="text" name="address" value="<?php echo $m["Address"];?>" placeholder="Service"></td></tr>
					<tr><td>	<input type="text" name="salary" value="<?php echo $m["Salary"];?>" placeholder="Service"></td></tr>
						
						

				<tr>
					<td align="center">
						<input type="submit" name="updateManager" value="Update Manager">
					</td>
				</tr>
			</table>
		</form>
	</body></fieldset>
</html>