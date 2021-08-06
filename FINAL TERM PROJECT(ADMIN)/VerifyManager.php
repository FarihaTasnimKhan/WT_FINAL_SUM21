<?php
/*	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$err=false;*/
	

	include 'Controller/ManagerController.php'	
?>

<html>
	<head>
	<title>VERIFY REGISTERED MANAGER</title>
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
				
				return !hasError;
			}
			
			
			
			function refresh(){
				hasError=false;
				get("err_name").innerHTML="";
				get("err_uname").innerHTML = "";
				


			}
	</script>
	</head>
	<body>
	<h1 id="p1">VERIFY REGISTERED MANAGER</h1>
	
	
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
			<form action="" onsubmit="return validate()" method="post"><h2><?phpecho $err_db;?></h2> 
			 <table><table align="center" >
				<tr>
					<td><b>Name:</td>
					<td><input type="text" id="name" name="name" value="<?php echo $name;?>"></td>
					<td><span id="err_name"><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><b>Username:</td>
					<td><input type="text" id="username" name="username" value="<?php echo $uname;?>"></td>
					<td><span id="err_uname"><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="verify" value="VERIFY"></td>
				</tr>

				</table></table>
			</form>	
		</fieldset>		
		<a href="AdminDashboard.php" class="btn-link">GO BACK TO ADMIN DASHBOARD</a>
		</body>
	
</html>