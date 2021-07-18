<html>
	<head><?php 
	include 'Dashboard.php';
	include 'Controller/Controller.php';
	?>
	<title>Add Student</title></head>
	<body>
		<fieldset><h1><b>Add Student</h1>
			<form action="" method="post">
			<h3><?php echo $err_db_error; ?></h3>
			<br><br><br><br>
			<table>
			<tr>
			<td><b>Name :</td>
			<td><input type="text" name="name"></td>
			</tr>
			<tr>
			<td><b>ID:</td>
			<td><input type="text" name="id"></td>
			</tr>
			<tr>
			<td><b>DOB :</td>
			<td><input type="text" name="dob"></td>
			</tr>
			<tr>
			<td><b>credit :</td>
			<td><input type="text" name="credit"></td>
			</tr>
			<tr>
			<td><b>CGPA:</td>
			<td><input type="text" name="CGPA"></td>
			</tr
			<tr>
			<td><b>Department:</td>
			<td><input type="text" name="name"></td>
			</tr>
			<tr><td align="center" colspan="2"><input type="submit" name="add_cat" value="Add Student"><br></tr>
			
			</table>
			</form>
		</fieldset>
	</body>
</html>		