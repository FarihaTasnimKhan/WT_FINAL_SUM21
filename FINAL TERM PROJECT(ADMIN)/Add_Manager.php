<?php
	include 'Controller/ManagerController.php'
?>

<html>
	<head>
	<title>ADD MANAGER</title>
	</head>
	<body>
	<h1>ADD MANAGER</h1>
	
	
		<fieldset>
			<form action="" method="post">
			 <table><table align="center" >
			<h2><?phpecho $rs;?></h2> 
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" placeholder="Name"value="<?php echo $name;?>"></td><td><span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username"placeholder="Username" value="<?php echo $uname;?>"></td><td><span><?php echo $err_uname;?></span></td>
				</tr><tr>
				
					<td>Email:</td>
					<td><input type="text" name="email"placeholder="Email" value="<?php echo $email;?>"></td>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				
				<tr>
					<td>Address:</td>
					<td><input type="text" name="address"placeholder="Address" value="<?php echo $address;?>"></td><td><span><?php echo $err_address;?></span></td>
				</tr>
				<tr>
					<td>Date Of Birth:</td>
					<td><input type="text" name="dateOfBirth" placeholder="dd/mm/yy"value="<?php echo $DOB;?>"></td><td><span><?php echo $err_DOB;?></span></td>
				</tr>
					<td>Salary:</td>
					<td><input type="text" name="salary" placeholder="Salary" value="<?php echo $salary;?>"></td><td><span><?php echo $err_salary;?></span></td>
				</tr>
				<tr>
						<td align="Right">Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					<td align="center" colspan="2"><input type="submit" name="add_manager"value="ADD MANAGER"></td><br><br><br>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="back" value="Go Back To Admin Dashboard"></td>
				</tr>
			</form>	
			
		</fieldset>		
	</body>
</html>