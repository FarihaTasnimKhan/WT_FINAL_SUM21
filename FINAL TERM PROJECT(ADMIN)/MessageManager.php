<?php include 'Controller/ManagerController.php' ?>
<?php
$manager=getAllManager();

?>

<html>
	<head>
	<title>Message MANAGER</title>
	</head>
	<body>
	<h1>MESSAGE MANAGER</h1>
	<fieldset>
			<form action="" method="post">
			 <table><table align="left" >
			 
<tr>Manager Information</tr>	

	
<tr><td>NO.</td><td>NAME</td>
<td>USERNAME</td>
</tr>
<?php
$i=1;
foreach($manager as $m){
 
echo "<tr>";
							echo "<td>$i</td>";echo "<td>".$m["Name"]."</td>";
					        echo "<td>".$m["Username"]."</td>";
							echo "</tr>";
						$i++;
}

?>
<tr>
					<td>Username:</td>
					<td><input type="text" name="username"placeholder="Manager Username" value="<?php echo $uname;?>"></td><td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td>Message:</td>
					<td>
						<textarea name="message" placeholder="WRITE YOUR MESSAGE HERE"><?php echo $message;?></textarea>
					</td>
					
				</tr>
				<tr>
					<td  ><input type="submit" name="sendmessage"value="SEND MESSAGE"></td><br><br><br>
					<span><td><input type="submit" name="sendanothermessage"value="SEND ANOTHER MESSAGE"></td>
				</tr>
				<tr>
					<td  colspan="2"><input type="submit" name="back" value="Go Back To Admin Dashboard"></td>
				</tr>
			</form>	
			
		</fieldset>		
	</body>
</html>