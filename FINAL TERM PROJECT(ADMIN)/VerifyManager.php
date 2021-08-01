<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	
	$err=false;
	

	include 'Controller/ManagerController.php'

	
	
	
?>

<html>
	<head>
	<title>VERIFY REGISTERED MANAGER</title>
	</head>
	<body>
	<h1>VERIFY REGISTERED MANAGER</h1>
	
	
		<fieldset>
			<form action="" method="post"><h2><?phpecho $err_db;?></h2> 
			 <table><table align="center" >
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?php echo $name;?>"></td>
					<td><span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value="<?php echo $uname;?>"></td>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="verify" value="VERIFY"></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="back" value="Go Back To Admin Dashboard"></td>
				</tr>
			</form>	
		</fieldset>		
	</body>
</html>