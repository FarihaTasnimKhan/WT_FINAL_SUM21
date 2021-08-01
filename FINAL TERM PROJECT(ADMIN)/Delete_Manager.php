<?php
	include 'Controller/ManagerController.php'
	
	
?>
<?php

	/*$uname= $_GET["Username"];
	$c = getManager($uname);*/
	
	
	$uname= $_GET["Username"];
	$manager=getManager($uname);
	
?>

<html>
	<body>
	
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden" value="<?php echo $uname?>" name="id">
					<input type="text" name="Username" value="<?php echo $manager["Username"];?>" placeholder="Category name">
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="delete" value="Delete ">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>