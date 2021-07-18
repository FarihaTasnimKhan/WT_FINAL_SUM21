<html>
	<head>
	
	<title>All Student</title></head>
	<body><h1>All Student</h1>	</body>
</html>	
	<?php 
	include 'Dashboard.php';
	include 'Controller/Controller.php';
	
	$cat=getAllCat();
	?>
	


	<?php
	
                    $i=1;
					foreach($cat as $c)
					{
						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$c["name"]."</td>";
							echo '<td><a href="Edit_Student.php?id='.$c['id'].'">Edit</a></td>';
							
						echo "</tr>";
						$i++;
	
	
	
	?>
