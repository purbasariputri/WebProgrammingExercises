<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php  
		$baris = 4;
		$kolom = 5;
		echo "<table border='1'>";
		for ($i=1; $i<=$baris; $i++) { 
			echo "<tr>";
			for ($j=1; $j<=$kolom; $j++) { 
				echo "<td>Hello</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>