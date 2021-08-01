<?php
	include 'Controller/ManagerController.php';
	$id = $_GET["id"];
	$c = getManager($id);
	
?>

<html>
	<body>
	<h1><?php echo $db_err;?></h1>
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">
					<input type="text" name="name" value="<?php echo $c["Name"];?>" placeholder="Category name">
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="delete" value="Delete Category">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>