<?php
	include 'Controller/ServiceController.php';
	

$id= $_GET["id"];
$s = getService($id);
?>
<html>
<fieldset>
	<body>
	
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden"   name="id" value="<?php echo $id?>"></td></tr>
					
					<tr><td>	<input type="text" name="request" value="<?php echo $s["Request"];?>" placeholder="Service"></td></tr>
						
						

				<tr>
					<td align="center">
						<input type="submit" name="updateServiceStatus" value="Update Service Status">
					</td>
				</tr>
			<tr>	<td align="right">
						<input type="submit" name="backToInfo" value="Go Back To All Service Information">
					</td></tr>
			</table>
		</form>
	</body></fieldset>
</html>