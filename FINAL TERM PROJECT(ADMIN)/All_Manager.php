<?php 
include 'Controller/ManagerController.php';
$manager=getAllManager();

?>

<html><head>

<title>ALL MANAGER</title></head><body><h2 id="p1">ALL REGISTERED MANAGER DETAILS</h2><fieldset>
<form>

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
	


 <table><table align="center" >
				
<tr><td>NO.</td>
<td>NAME</td>
<td>USERNAME</td>
<td>EMAIL</td>
<td>ADDRESS</td>
<td>DATE OF BIRTH</td>
<td>SALARY</td><td>GENDER</td>
</tr>
<?php
$i=1;
foreach($manager as $m){
 
echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$m["Name"]."</td>";
							echo "<td>".$m["Username"]."</td>";
							echo "<td>".$m["Email"]."</td>";
							echo "<td>".$m["Address"]."</td>";
							echo "<td>".$m["DateOfBirth"]."</td>";
							echo "<td>".$m["Salary"]."</td>";
							echo "<td>".$m["Gender"]."</td>";
							echo '<td><a href="UpdateManager.php?id='.$m['ID'].'">Update</a></td>';
							echo '<td><a href="Delete_Manager.php?id='.$m['ID'].'">Delete</a></td>';
						echo "</tr>";
						$i++;


}

?>
</table></form></fieldset>
<a href="AdminDashboard.php"class="btn-link">GO BACK TO ADMIN DASHBOARD</a>

</body>

</html>