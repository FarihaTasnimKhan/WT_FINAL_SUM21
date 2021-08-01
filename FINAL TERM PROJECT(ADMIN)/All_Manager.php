<?php 
include 'Controller/ManagerController.php';
$manager=getAllManager();

?>

<html><head><title>ALL MANAGER</title></head><body><h2>ALL REGISTERED MANAGER DETAILS</h2><fieldset>
<form> <table><table align="center" >
				
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
</table></form></fieldset></body></html>