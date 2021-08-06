<?php
	include 'Controller/ManagerController.php'
?>

<html>
	<head>
	<title>ADD MANAGER</title>
	
	
	
	<script>
	       var hasError=false;
	        function get(id){
				return document.getElementById(id);
		                	}
							
							
			function validate(){
	
			    refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Req";
				}
				else if(get("name").value.length <= 2){
					hasError = true;
					get("err_name").innerHTML = "*Name must be > 2 characters";
				}
				if(get("username").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "*Username Req";
				}
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML = "*Email Req";
				}
				if(!get("male").checked && !get("female").checked){
					hasError = true;
					get("err_gender").innerHTML = "*Gender Req";
					
				}
				if(get("salary").value == ""){
					hasError = true;
					get("err_salary").innerHTML = "*Salary Req";
				}
				if(get("DOB").value == ""){
					hasError = true;
					get("err_DOB").innerHTML = "*Date Of Birth Req";
				}
				if(get("address").value == ""){
					hasError = true;
					get("err_address").innerHTML = "*Address Req";
				}

				
				return !hasError;
			}
			
			
			
			function refresh(){
				hasError=false;
				get("err_name").innerHTML="";
				get("err_uname").innerHTML = "";
				get("err_email").innerHTML = "";
				get("err_gender").innerHTML = "";
				get("err_salary").innerHTML = "";
				get("err_DOB").innerHTML = "";
				get("err_address").innerHTML = "";
				


			}
	</script>
	
	
	</head>
	<body>

	<h1 id="p1">ADD MANAGER</h1>
	
	
	<style>

#p1{
color:blue;
}

body {
 text-align: center;
 background-color: #caebe0;
}
.btn-link{
	
	background-color:rgb(73,127,175);
	color:white;
	padding-left:20px;
	padding-right:20px;
	padding-top:10px;
	padding-bottom:10px;
	border-radius:2px;
	font-family:calibri;
	text-decoration:none;
}
	
	</style>
	
	
	
		<fieldset>
			<form action="" onsubmit="return validate()" method="post">
			 <table><table align="center" >
			<h2><?phpecho $rs;?></h2> 
				<tr>
					<td><b>Name:</td>
					<td><input type="text" id="name" name="name" placeholder="Name"value="<?php echo $name;?>"></td>
					<td><span id="err_name"><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><b>Username:</td>
					<td><input type="text" id="username" name="username"placeholder="Username" value="<?php echo $uname;?>"></td>
					<td><span id="err_uname"><?php echo $err_uname;?></span></td>
				</tr><tr>
				
					<td><b>Email:</td>
					<td><input type="text" id="email" name="email"placeholder="Email" value="<?php echo $email;?>"></td>
					<td><span id="err_email"><?php echo $err_email;?></span></td>
				</tr>
				
				<tr>
					<td><b>Address:</td>
					<td><input type="text" id="address" name="address"placeholder="Address" value="<?php echo $address;?>"></td>
					<td><span id="err_address"><?php echo $err_address;?></span></td>
				</tr>
				<tr>
					<td><b>Date Of Birth:</td>
					<td><input type="text" id="DOB" name="dateOfBirth" placeholder="dd/mm/yy"value="<?php echo $DOB;?>"></td>
					<td><span id="err_DOB"><?php echo $err_DOB;?></span></td>
				</tr>
					<td><b>Salary:</td>
					<td><input type="text" id="salary" name="salary" placeholder="Salary" value="<?php echo $salary;?>"></td>
					<td><span id="err_salary"><?php echo $err_salary;?></span></td>
				</tr>
				<tr>
					<td><b>Gender: </td>
					<td><input type="radio" id="male" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  id="female" value="Female" type="radio"> Female</td>
					<td><span id="err_gender"><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					<td align="center" colspan="2"><input type="submit" name="add_manager"value="ADD MANAGER"></td><br><br><br>
				</tr>
				</table>
			</form>	
			
		</fieldset>		
		<a href="AdminDashboard.php" class="btn-link">GO BACK TO ADMIN DASHBOARD</a>
	</body>
	
</html>