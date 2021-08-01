<?php 
include 'Controller/ServiceController.php';
$service=getAllService();

?>

<html><head><title>ALL SERVICE</title></head><body><h2>ALL SERVICE INFORMATION</h2><fieldset>
<form> <table><table align="center" >
				
<tr><td>NO.</td>
<td>SERVICE 1</td>
<td>SERVICE 2</td>
<td>SERVICE 3</td>
<td>REQUEST</td>

</tr>

<?php
$i=1;
foreach($service as $s){
 
echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$s["Service1"]."</td>";
							echo "<td>".$s["Service2"]."</td>";
							echo "<td>".$s["Service3"]."</td>";
							echo "<td>".$s["Request"]."</td>";
						
							echo '<td><a href="UpdateServiceStatus.php?id='.$s['ID'].'">Update</a></td>';
							echo '<td><a href="ReportGenerate.php?id='.$s['ID'].'">Generate Report</a></td>';
							echo '<td><a href="DownloadReport.php?id='.$s['ID'].'">Download Report</a></td>';
							
						echo "</tr>";
						$i++;


}

?>

</table></form></fieldset>
</body></html>