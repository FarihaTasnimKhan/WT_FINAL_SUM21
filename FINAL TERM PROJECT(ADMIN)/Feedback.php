<?php 
include 'Controller/ServiceController.php';
?>
<?php 
$feedback=getAllFeedback();
?>

<html><html><br><br><a href="AdminDashboard.php" class="btn-link">GO BACK TO ADMIN DASHBOARD</a>	

<head><title>FEEDBACK</title></head><body><h2 id="p">USER FEEDBACK</h2>

<style>

body {
 text-align: center;
 background-color: #caebe0;
}
#p{
color:blue;
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
<form> <table><table align="center" >
				
<tr><td id="p"><b>NO.</td>
<td id="p"><b>NAME</td>
<td id="p"><b>DATE</td>
<td id="p"><b>FEEDBACK</td>
<td id="p"><b>RATING</td>

</tr>

<?php
$i=1;
foreach($feedback as $f){
 
echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$f["Name"]."</td>";
							echo "<td>".$f["Date"]."</td>";
							echo "<td>".$f["Feedback"]."</td>";
							echo "<td>".$f["Rating"]."</td>";
						
							
							
							
						echo "</tr>";
						$i++;


}

?>

</table></form></fieldset>

</body></html>