<?php
	include 'Controller/Controller.php';
	include 'Dashboard.php';
	$id = $_GET["id"];
	$c = getCat($id);

	
	echo $err_db_error;
?>

<html><head><h1>Edit Student</h1><title>Edit Student</title></head><body>
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">
						<input type="text" name="name" value="<?php echo $c["name"];?>" placeholder="Student name">
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="editcategory" value="Edit Student">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html> 